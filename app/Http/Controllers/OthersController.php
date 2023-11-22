<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Auth;
use App\Areas;
use App\Worktimeperiod;
use App\Setting;
use App\Search;
use App\OrderDriver;
use App\Drivers;
use App\Notification;
use App\ProductDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SuperCategories;
use App\Cities;
use App\Clinic;
use App\Blog;
use Illuminate\Support\Facades\Storage;
use App\Team;
use App\Program;


class OthersController extends Controller
{
    public function getViews()
    {

        if (Auth::user() && Auth::user()->admin == "1") {
            $data = DB::select("SELECT users.id as user_id,users.name as user,users.OS,products.name as product,products.price,stores.name as store_name,products.image,product_view.created_at FROM stores inner join products on products.store_id=stores.id INNER JOIN`product_view`on products.id=product_view.product_id left JOIN users ON users.id=product_view.user_id order by product_view.id desc limit 300");

            return view('Others.views', ["views" => $data]);
        } else {
            return redirect(url('/'));
        }
    }

    public function getSearch()
    {

        if (Auth::user() && Auth::user()->admin == "1") {
            $data = Search::orderBy('id', 'desc')->get();
            return view('Others.search', ["search" => $data]);
        } else {
            return redirect(url('/'));
        }
    }

    public function getSetting($name)
    {
        $data = Setting::where('key', $name)->first();
        return ["show_code"=>$data->value];
    }

    public function getNotificationName()
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            $cats = SuperCategories::get();
            $cities = Cities::get();
            $doctors = User::where("user_type", "dr")->get();
            $users = User::where("user_type", "user")->get();
            return view('Others.notification',["cats" => $cats, "cities" => $cities, "doctors" => $doctors, "users" => $users]);
        } else {
            return redirect(url('/'));
        }
    }

    public function open_app()
    {
//      return redirect('https://apps.apple.com/us/app/xmarket/id1601223288');
        $browser = $this->get_browser(null, true);
        if ($browser == "mac") {
            return redirect('https://apps.apple.com/us/app/%D8%AD%D8%AC%D8%B2%D9%83-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A/id1543891767');
        } else if ($browser == "windows") {
            return redirect('https://play.google.com/store/apps/details?id=com.hajzakaltebi.app');
        } else if ($browser == "linux") {
            return redirect('https://play.google.com/store/apps/details?id=com.hajzakaltebi.app');
        } else {
            return redirect('https://apps.apple.com/us/app/%D8%AD%D8%AC%D8%B2%D9%83-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A/id1543891767');
        }
    }
    public function SendNotificationName(Request $request)
    {
        if (Auth::user() && Auth::user()->admin == "1") {
                if($request->type == "doctors") {
                    $data = User::where([["user_type","dr"]])->get(['id', 'name', 'firebase_token']);
            
                }else if ($request->type == "users") {
                    $data = User::where([["user_type","user"]])->get(['id', 'name', 'firebase_token']);
                }else if ($request->type == "doctors_section") {
                    $clinics =  Clinic::where("category_id", $request->super_category_id)->get();
                    $ids = [];
                    foreach($clinics as $c) {
                        $ids[] = $c->user_id;
                    }
                    $data = User::whereIn('id', $ids)->get(['id', 'name', 'firebase_token']);
                }else if ($request->type == "doctors_city") {
                    $clinics =  Clinic::where("city_id", $request->city_id)->get();
                    $ids = [];
                    foreach($clinics as $c) {
                        $ids[] = $c->user_id;
                    }
                    $data = User::whereIn('id', $ids)->get(['id', 'name', 'firebase_token']);
                }else if ($request->type == "single_doctor") {
                    $data = User::where([["id",$request->doctor_id]])->get(['id', 'name', 'firebase_token']);
                }else if ($request->type == "single_user") {
                    $data = User::where([["id",$request->user_id]])->get(['id', 'name', 'firebase_token']);
                }
                foreach ($data as $d) {
                    $notification = new Notification;
                    $notification->user_id = $d->id;
                    $notification->title = $request->title;
                    $notification->body = $request->body;
                    $notification->type = "news";
                    $notification->save();

                    $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';

                    $server_key = "AAAA_g8gfNo:APA91bEluR3vkbhK1_bT-gJIx5ZWV4VRHCMN7KB8zCGAHHKD5ECSGDLV0oTWXX4dlIRA-AWFP2a6t_QjiIqMNkiq2LNVp48mhNDLVA0wp8aGSZukmGHBoZ6OHcpcmJMBU4GiK5dmI5aR";
                    $fields = array(
                        'to' => $d->firebase_token,
                        'notification' => array('title' => $request->title, 'body' => $request->body, 'sound' => 'default',
                            'click_action' => 'news',
                            'show_in_foreground' => true),
                        'data' => array('message' => $request->body,
                            'value' => 'value',
                            'id' => 0,
                            'vibrate' => 1));
                    $headers = array(
                        'Authorization:key=' . $server_key,
                        'Content-Type:application/json'
                    );
                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

                    $result = curl_exec($ch);

                    curl_close($ch);

    


                }


                return redirect(url('/admin/notifications'));
            
        } else {
            return redirect(url('/'));
        }
    }

    public function notificationsIndex() {
        $data = Notification::orderBy("id","desc")->get();
        foreach($data as $item) {
            if($item->user_id != 0) {
            $user = User::find($item->user_id);
            $item->user = $user;
            }
        }
        return view("Others.notifications_index",["data" => $data]);
    }

    public function deleteNotification($id) {
        Notification::find($id)->delete();
        return redirect()->back();
    }

    public function API_create_notification(Request $request) {
        $user = User::find($request->user_id);
        $notification = new Notification;
        $notification->user_id = $request->user_id;
        $notification->title = $request->title;
        $notification->body  = $request->body;
        $notification->type  = $request->type;
        $notification->save();
        $this->sendNotification($user->firbase_token, $request->title, $request->body);
        return response()->json(["status" => "true"]);
    }

    public function API_get_user_notifications(Request $request) {
        $notifications = Notification::where("user_id", $request->user()->id)->orderBy("id","desc")->get();
        return response()->json(["status" => "true", "data" => $notifications]);
    }
    public function API_get_user_count_notifications(Request $request,$notification_id) {
        $notifications = Notification::where([["user_id", $request->user()->id],["id",'>',$notification_id]])->orderBy("id","desc")->get()->count();
        return response()->json(["status" => "true", "count" => $notifications]);
    }

    function sendNotification($firebase, $title, $message)
    {
            $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
            $server_key = "AAAA_g8gfNo:APA91bEluR3vkbhK1_bT-gJIx5ZWV4VRHCMN7KB8zCGAHHKD5ECSGDLV0oTWXX4dlIRA-AWFP2a6t_QjiIqMNkiq2LNVp48mhNDLVA0wp8aGSZukmGHBoZ6OHcpcmJMBU4GiK5dmI5aR";
            $fields = array(
                'to' => $firebase,
                'notification' => array('title' => $title, 'body' => $message, 'sound' => 'default',
                    'click_action' => 'notification_order',
                    'show_in_foreground' => true),
                'data' => array('message' => $message,
                    'value' => 'value',
                    'id' => 0,
                    'vibrate' => 1));
            $headers = array(
                'Authorization:key=' . $server_key,
                'Content-Type:application/json'
            );
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

            $result = curl_exec($ch);

            curl_close($ch);
        


    }

    public function blog_index() {
        $data = Blog::orderBy("id","desc")->get();
        return view("blog.index",["data" => $data]);
    }

    public function blog_create() {
     
        return view("blog.create");
    }

    public function blog_store(Request $request) {
        $data = $request->all();
        if($request->hasFile('image')) {
        $small_image = Storage::disk('public_uploads')->putFile("/blog_images", $request->file('image'));
        $small_image = str_replace("blog_images/", "", $small_image);
        $data["image"] = basename($small_image);
        }
        Blog::create($data);
        return redirect("/admin/blog");
    }

    public function blog_edit($id) {
        $blog = Blog::find($id);
     
        return view("blog.edit",["item" => $blog]);
    }

    public function blog_update(Request $request) {
        $blog = Blog::find($request->id);
        $data = $request->all();
        if($request->hasFile('image')) {
        $small_image = Storage::disk('public_uploads')->putFile("/blog_images", $request->file('image'));
        $small_image = str_replace("blog_images/", "", $small_image);
        $data["image"] = basename($small_image);
        }
        $blog->fill($data)->save();
        return redirect()->back();
    }

    public function blog_delete($id) {
        Blog::find($id)->delete();
        return redirect()->back();
    }

    public function API_get_blog() {
        $blog = Blog::orderBy("id","desc")->get();
        return response()->json(["status" => "true", "data" => $blog]);
    }

    public function teams_index() {
        $data = Team::orderBy("id","desc")->get();
        return view("teams.index",["data" => $data]);
    }

    public function teams_create() {
        return view("teams.create");
    }

    public function teams_store(Request $request) {
        $data = $request->all();
        if($request->hasFile('image')) {
        $small_image = Storage::disk('public_uploads')->putFile("/uploads/images", $request->file('image'));
        $small_image = str_replace("uploads/images/", "", $small_image);
        $data["image"] = basename($small_image);
        }
        Team::create($data);
        return redirect("/admin/teams");
    }

    public function teams_edit($id) {
        $team = Team::find($id);
        return view("teams.edit",["item" => $team]);
    }

    public function teams_update(Request $request) {
        $blog = Team::find($request->id);
        $data = $request->all();
        if($request->hasFile('image')) {
        $small_image = Storage::disk('public_uploads')->putFile("/uploads/images", $request->file('image'));
        $small_image = str_replace("uploads/images/", "", $small_image);
        $data["image"] = basename($small_image);
        }
        $blog->fill($data)->save();
        return redirect()->back();
    }

    public function teams_delete($id) {
        Team::find($id)->delete();
        return redirect()->back();
    }

    public function API_get_teams() {
        $blog = Team::orderBy("id","desc")->get();
        return response()->json(["status" => "true", "data" => $blog]);
    }

}