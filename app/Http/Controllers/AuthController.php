<?php

namespace App\Http\Controllers;

use App\Restaurants;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Package;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
//        User::ios()->active()->get();
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required'
        ]);

//        return env('SMS_URL','3');

        $phone = request('phone');
        $first_number = Str::substr($phone, 0, 1);
        if ($first_number == "0") {
            $phone = "00972" . Str::substr($phone, 1);
        }

        $code = mt_rand(1000, 9999);
        $user_phone = User::where('phone', $phone)->count();
        if ($user_phone != '0') {
            return ["status" => 'error_phone'];
        }
        $package = Package::where('default', 'true')->first();
        $user = new User();
        $user->name = $request->name;
        $user->phone = $phone;
        $user->OS = $request->OS;
        $user->code = $code;
        $user->city_id = $request->city_id;
        $user->user_type = $request->user_type;
        $user->birthdate = $request->birthdate;
        $user->gender = $request->gender;
        $user->blood_type = $request->blood_type;
        $user->package_id = $package->id;
        $user->firebase_token = $request->token;
        $user->password = bcrypt($request->password);
        $user->save();
        $attributes = array(
            'phone' => $phone,
            'password' => $request->password,
        );
//        $credentials = request(['phone', 'password']);
        if (!Auth::attempt($attributes))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        $saved = $user->save();
        if ($saved) {
            $msg = "رمز تأكيد حسابك في تطبيق حجزك الطبي هو " . $code;
            $headers = array('Content-Type: application/json');

            $url = "http://sms.supercode.ps/API/SendSMS.aspx?id=f64407c9b4f7333531ea77f8c6e60219&sender=hajzkaltebi&to=" . urlencode($request->phone) . "&msg=" . urlencode($msg);
            $fields = array();
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, $url);
            curl_setopt($ch1, CURLOPT_POST, true);
            curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_POSTFIELDS, json_encode($fields));
            $result1 = curl_exec($ch1);
            curl_close($ch1);
//            return $result1;
            if ($result1 == "Message Sent Successfully!") {
                return response()->json([
                    'status' => 'true'
                ], 201);
            } else {
                $responce = ["status" => $result1, "user" => $user];
            }
            return $responce;
        } else {
            $responce = ["status" => "false"];
        }
    }


    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
     
        $request->validate([
            'password' => 'required',
            'phone' => 'required',
            'token' => 'required'
        ]);
        $phone = request('phone');
        $first_number = Str::substr($phone, 0, 1);
        if ($first_number == "0") {
            $phone = "00972" . Str::substr($phone, 1);
        }
        $user_phone = User::where('phone', $phone)->count();
        if ($user_phone == "0") {
            return ["status" => 'error_phone'];
        }
        $credentials = ["phone" => $phone, "password" => $request->password];
//        return $credentials;
        if (!Auth::attempt($credentials))
            return response()->json([
                'status' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        if ($user->active == "false") {

            $code = mt_rand(1000, 9999);
            $msg = "رمز تأكيد حسابك في تطبيق حجزك الطبي هو " . $code;
            $user->code = $code;
            $user->save();
            $headers = array('Content-Type: application/json');

            $url = "http://sms.supercode.ps/API/SendSMS.aspx?id=f64407c9b4f7333531ea77f8c6e60219&sender=hajzkaltebi&to=" . urlencode($user->phone) . "&msg=" . urlencode($msg);
            $fields = array();
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, $url);
            curl_setopt($ch1, CURLOPT_POST, true);
            curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_POSTFIELDS, json_encode($fields));
            $result1 = curl_exec($ch1);
            curl_close($ch1);
            if ($result1 == "Message Sent Successfully!") {
                return response()->json([
                    'status' => 'code'
                ], 201);
            } else {
                $responce = ["status" => $result1, "user" => $user];
            }
            return $responce;
        }
        $user1 = User::where('id', $user->id)->first(['id', 'name','user_type','city_id','id_number','store_id', 'email', 'gender', 'birthdate', 'phone', 'image','created_at']);

        $user1->firebase_token = $request->token;
        $user1->save();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(500);
        $token->save();
        $user1->image = url("/") . "/get_image/images/" . $user1->image;
        $user1->token_type = 'Bearer';
        $user1->expires_at = Carbon::parse($tokenResult->token->expires_at)->toDateTimeString();
        $user1->access_token = $tokenResult->accessToken;


        return response()->json([
            'status' => 'true',
            'user' => $user1
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'status' => 'true'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        $data = $request->user();
        $data = User::where('id', $data->id)->first(['id', 'id_number','name', 'email', 'phone', 'gender', 'birthdate', 'image', 'created_at']);
        $data->image = url("/") . "/storage/images/" . $data->image;
        return Response()->json($data);
    }

    public function post(Request $request)
    {
        $user = $request->user()->id;

        Post::where("user", $user)->get();


    }

    public function edit_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'id_number' => 'required',
            'birthdate' => 'required',
        ]);
//        $user = $request->user()->first(['id', 'name', 'email', 'gender', 'birthdate', 'phone', 'image']);
        $user=User::where('id',$request->user()->id)->first(['id', 'name', 'email', 'gender', 'birthdate', 'phone', 'image','created_at']);
//        return $user;
        if ($request->has('image')) {
            //large_image
            $image = Storage::putFile("images", $request->file('image'));
            $image = str_replace("images/", "", $image);
            $path = storage_path("app/images/" . $image);
            $image_name = $this->make_thumb($path, 200, "0", "public/images");
            $user->image = $image_name;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->id_number = $request->id_number;
        $user->birthdate = $request->birthdate;
        $save = $user->save();
        if ($save) {
            $user1 = User::where('id', $user->id)->first(['id', 'id_number','name', 'image', 'email', 'gender', 'birthdate', 'phone', 'image']);
            $user1->image = url("/") . "/storage/images/" . $user1->image;
            $user1->phone = '0' . Str::substr($user1->phone, 5);
            return ["status" => "true", "user" => $user1];
        } else {
            return ["status" => "false"];
        }
    }


    public function make_thumb($src, $desired_width, $name, $path)
    {

        /* read the source image */
        //$source_image = imagecreatefromjpeg($src);

        // $src = $dest.'\\'.$filename;
        $source_image = $this->getImage($src);
        $width = imagesx($source_image);
        $height = imagesy($source_image);

        /* find the "desired height" of this thumbnail, relative to the desired width  */
        $desired_height = floor($height * ($desired_width / $width));

        /* create a new, "virtual" image */
        $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

        /* copy source image at a resized size */
        imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

        $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
        if ($name == "0") {
            $thumb_file = storage_path("app/" . $path . "/") . $t . '.jpg';
        } else {
            $thumb_file = storage_path("app/" . $path . "/") . $name;
        }
        /* create the physical thumbnail image to its destination */
        imagejpeg($virtual_image, $thumb_file);

        if ($name == "0") {
            return $t . '.jpg';
        } else {
            return $name;
        }

    }


    public
    function getImage($path)
    {
        switch (mime_content_type($path)) {
            case 'image/png':
                $img = imagecreatefrompng($path);
                break;
            case 'image/gif':
                $img = imagecreatefromgif($path);
                break;
            case 'image/jpeg':
                $img = imagecreatefromjpeg($path);
                break;
            case 'image/bmp':
                $img = imagecreatefrombmp($path);
                break;
            default:
                $img = null;
        }
        return $img;
    }

    public function confirm_code(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'phone' => 'required',
            'remember_me' => 'boolean'
        ]);

        $phone = request('phone');
        $first_number = Str::substr($phone, 0, 1);
        if ($first_number == "0") {
            $phone = "00972" . Str::substr($phone, 1);
        }

        $user_phone = User::where('phone', $phone)->count();
        if ($user_phone == "0") {
            return ["message" => 'error_phone'];
        }
        $credentials = ["phone" => $phone, "password" => $request->password];
        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        if ($user->code == $request->code) {

            $user->active = "true";
            $user->save();

            $user1 = User::where('id', $user->id)->first(['id', 'name', 'email', 'gender', 'birthdate', 'phone', 'image','created_at']);

            $user1->firebase_token = $request->token;
            $user1->save();

            $user1->image = url("/") . "/get_image/images/" . $user1->image;
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            if ($request->remember_me)
                $token->expires_at = Carbon::now()->addWeeks(500);
            $token->save();
            $user1->token_type = 'Bearer';
            $user1->expires_at = Carbon::parse($tokenResult->token->expires_at)->toDateTimeString();
            $user1->access_token = $tokenResult->accessToken;
            return response()->json([
                'status' => 'true',
                'user' => $user1
            ]);
        } else {
            return ['status' => 'false'];
        }

    }

    public function edit_password(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'phone' => 'required',
            'new_password' => 'required'
        ]);

        $phone = request('phone');
        $first_number = Str::substr($phone, 0, 1);
        if ($first_number == "0") {
            $phone = "00972" . Str::substr($phone, 1);
        }

        $user_phone = User::where('phone', $phone)->count();
        if ($user_phone == "0") {
            return ["status" => 'error_phone'];
        }

        $credentials = ["phone" => $phone, "password" => $request->password];
        if (!Auth::attempt($credentials))
            return response()->json([
                'status' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $user1 = User::where('id', $user->id)->first(['id', 'name', 'email', 'gender', 'birthdate', 'phone', 'image','created_at']);
        $user1->password = bcrypt($request->new_password);
        $save = $user1->save();
        if ($save) {
            return ["status" => "true"];
        } else {
            return ["status" => "false"];
        }

    }
}