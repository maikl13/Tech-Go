<?php

namespace App\Http\Controllers;

use Auth;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Builder;

class ReportsController extends Controller
{
    public function order_report($start_date, $end_date, $status)
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            if ($status == 'all') {
                $status = '%';
            }
            $order = "select users.name as user_name,`order`.id as order_id ,`order`.date,`order`.time,`order`.sum,`order`.user_id,`order`.delivery,`order`.all_sum,`order`.status,`order`.note,`order`.store_id,
stores.name as restaurant_name,(SELECT count(*) as count_orders FROM `order` WHERE `order`.user_id=users.id and `order`.status = 'delivered') as count_orders from `stores` inner  join  `order` on 
`stores`.id=`order`.store_id inner join users on users.id=`order`.user_id  where order.status like '{$status}' order by order_id desc limit 30";
            return view('reports.order_report', ["orders" => DB::select($order)]);
        } else {
            return redirect(url('/'));
        }
    }
}