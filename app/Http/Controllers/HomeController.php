<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Cities;
use App\Order;
use App\Areas;
use App\Products;
use App\Stores;
use App\User;
use App\SuperCategories;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Notification;
use App\Question;
use App\Config;
use App\Project;
use App\MedicalRequest;
use App\Newsletter;


class HomeController extends Controller
{

    public function questions() {
        $data = Question::orderBy("id","desc")->get();
        return view("questions.index")->with(["data" => $data]);
    }

    public function deleteQuestion($id) {
        Question::find($id)->delete();
        return redirect()->back();
    }

    public function editQuestion($id) {
        $item = Question::find($id);
        return view("questions.edit")->with(["item" => $item]);
    } 

    public function updateQuestion(Request $request, $id) {
        $question = Question::find($id);
        $question->fill($request->all())->save();
        return redirect("/admin/questions");
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            $stats = array();
            $stats['website_views'] = Config::where("key","website_views")->first()->value;
            $stats['whatsapp_clicks'] = Config::where("key","whatsapp_btn_clicks")->first()->value;
            $stats['messages']     = MedicalRequest::count();
            $stats['projects']     = Project::where("type","project")->count();
            $stats['products']     = Project::where("type","product")->count();
            $stats['subscribers']     = Newsletter::count();
            return view('home')->with(["stats" => $stats]);
        } else {
            return redirect(url('/'));
        }
    }

    public function getStatics()
    {

        if (Auth::user() && Auth::user()->admin == "1") {

            $products = Products::where('active', 'yes')->get()->count();
            $stores = Stores::where('active', '1')->get()->count();
            $all_orders = Order::get()->count();
            $pending_orders = Order::where('status', 'pending')->get()->count();
            $in_delivery_orders = Order::where('status', 'in_delivery')->get()->count();
            $processing_orders = Order::where('status', 'processing')->get()->count();
            $delivered_orders = Order::where('status', 'delivered')->get()->count();
            $cancel_orders = Order::where('status', 'cancel')->get()->count();
            $count_cites = Cities::get()->count();
            $count_areas = Areas::get()->count();
            $count_user = User::get()->count();
            $count_categories = Categories::get()->count();
            $date = date('Y-m-d');

            $stores_feature = Stores::where('active', '1')->where('end_featured', '>', $date)->get()->count();
            $stores_active = Stores::where('active', '1')->where('end_date', '>', $date)->get()->count();
            $stores_not_active = Stores::where('end_date', '<=', $date)->orwhere('end_date', '')->get()->count();


            $products_active = Products::where('active', 'yes')->where('end_date', '<', $date)->get()->count();
            $products_feature = Products::where('active', 'yes')->where('end_feature', '<', $date)->get()->count();

            $sum_all_order = "select sum(`order`.all_sum) as sum from `order` where status='delivered' ";
            $sum_shipping = "select sum(`order`.delivery) as sum from `order` where status='delivered' ";
            $sum_products = "select sum(`order`.sum) as sum from `order` where status='delivered' ";


            return view('Statics.index', ["products" => $products,
                "stores" => $stores, "all_orders" => $all_orders,
                "pending_orders" => $pending_orders, "processing_orders" => $processing_orders,
                "in_delivery_orders" => $in_delivery_orders, "delivered_orders" => $delivered_orders,
                "cancel_orders" => $cancel_orders, "count_cites" => $count_cites, "count_areas" => $count_areas,
                "count_categories" => $count_categories, "count_user" => $count_user, "stores_feature" => $stores_feature,
                "stores_active" => $stores_active, "stores_not_active" => $stores_not_active,
                "products_active" => $products_active, "products_feature" => $products_feature,
                "sum_all" => DB::select($sum_all_order)[0]->sum, "sum_shipping" => DB::select($sum_shipping)[0]->sum,
                "sum_products" => DB::select($sum_products)[0]->sum]);
        } else {
            return redirect(url('/'));
        }


    }

    public function create_notification($user_id)
    {

        if (Auth::user() && Auth::user()->admin == "1") {

            return view('notifications.create', ["user_id" => $user_id]);
        } else {
            return redirect(url('/'));
        }

    }

    public function storeNotification(Request $request)
    {


        if (Auth::user() && Auth::user()->admin == "1") {
            $user = User::where('id', $request->user)->first(['firebase_token', 'name']);
            $this->sendNotification($user->firebase_token, $request->title, $request->body);
            $notification = new Notification;
            $notification->user_id = $request->user;
            $notification->title = $request->title;
            $notification->body = $request->body;
            $notification->type = "news";
            $notification->save();
//            return view('notifications.create');
            return redirect(url('/admin/notifications'));
        } else {
            return redirect(url('/'));
        }


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

    public function share_clinic($clinic_id, $user_id)
    {
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


    public function open_app()
    {
        $browser = $this->get_browser(null, true);
        if ($browser == "mac") {
            return redirect('https://apps.apple.com/us/app/%D8%A7%D9%84%D8%A3%D8%AE%D9%88%D9%8A%D9%86-%D9%85%D9%88%D9%84/id1596645339');
        } else if ($browser == "windows") {
            return redirect('https://play.google.com/store/apps/details?id=ps.supercode.alakhua');
        } else if ($browser == "linux") {
            return redirect('https://play.google.com/store/apps/details?id=ps.supercode.alakhua');
        } else {
            return redirect('https://apps.apple.com/us/app/%D8%A7%D9%84%D8%A3%D8%AE%D9%88%D9%8A%D9%86-%D9%85%D9%88%D9%84/id1596645339');
        }
    }
    function get_browser()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";

//            return $u_agent;
        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/iphone/i', $u_agent)) {
            $platform = 'iphone';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }


        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        if ($version == null || $version == "") {
            $version = "?";
        }
        return $platform;
    }
}
