<?php

namespace App\Http\Controllers;

use App\Events\OrderListEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Carbon;

class CustomerController extends Controller
{
    function reservationForm() {
        return view('customer/reservation/form');
    }
    function reservationHome() {
        return view('customer/reservation/home');
    }
    function reservationdone() {
        $time = Route::current()->parameter('time');
        return view('customer/reservation/done', compact('time'));
    }
    function tablepage() {
        $tableid = Route::current()->parameter('id');
        $gettable = DB::table('table')->where('table_id', $tableid)->where('isIdle', 0)->first();
        $createOrder = DB::table('order');
        // if (!$gettable) {
        //     return '<h1></h1>';
        // }
        // $data = [
        //     'table_id' => $tableid,
        //     'isIdle' => 1
        // ];
        return view('customer/home', compact('tableid'));
    }
    function customerOrder(Request $request, $tableid) {
        $id = Route::current()->parameter('id');
        // dd($id);
        $cookieData = json_decode(request()->cookie('menu_cookie_' . $tableid), true);
        $getOrderID = DB::table('order')->insertGetId([
            'table_id' => $tableid,
            'order_time' => now(),
            'status' => 'pending'
        ]);
        // dd($cookieData, $getOrderID);
        foreach ($cookieData as $order) {
            DB::table('orderdetails')->insert([
                'order_id' => $getOrderID,
                // 'table_id' => $tableid,
                'menu_id' => $order['menu_ID'],
                // 'menu_name' => $order['menu_Name'],
                // 'price' => $order['prices'],
                'quantity' => $order['count'],
                'order_status' => 'in-queue'	
            ]);
        }

        $totalAmount = DB::table('orderdetails')
            ->join('menu', 'orderdetails.menu_id', '=', 'menu.menu_id')
            ->where('order_id', $getOrderID)
            ->sum(DB::raw('quantity * price'));
        $total = $totalAmount + $totalAmount*0.07 + $totalAmount*0.1;
        DB::table('bill')->insert([
            'table_id' => $tableid,
            'order_id' => $getOrderID,
            'allprice' => $totalAmount,
            'isPaid' => false,
            'totalprice' => $total,
        ]);
        $notification = array(
            'message' => 'สั่งเมนูเรียบร้อย!',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.orderlist', ['id' => $id , 'orderid' => $getOrderID])->with($notification);
    }
    function orderPage() {
        $id = Route::current()->parameter('id');                
        $orderid = Route::current()->parameter('orderid');
        $orderlists = DB::table('order')
                        ->join('orderdetails', 'order.order_id', '=', 'orderdetails.order_id')
                        ->join('menu', 'orderdetails.menu_id', '=', 'menu.menu_id')
                        ->where('order.order_id', $orderid)
                        ->get();
        // dd($id, $orderid, $orderlists);
        return view('customer/orderlist', compact('orderlists'));
    }
    function reserving(Request $request) {
        $request->validate(
            [
                'name' =>'required',
                'people_num' => 'required',
                'phone_num' =>'required',
                'time' =>'required',
            ],
            [
                'name.required' => 'กรุณากรอกชื่อผู้ใช้ของคุณ',
                'people_num.required' => 'กรุณากรอกจำนวนที่นั่ง',
                'phone_num.required' => 'กรุณากรอกเบอร์โทรศัพท์',
                'time.required' => 'กรุณากรอกเวลาที่จอง',
            ]
        );
        DB::table('reservation')->insert([
            'name' => $request->name,
            'people_num' => $request->people_num,
            'phonenum' => $request->phone_num,
            'time' => $request->time,
            'end_time' => date('H:i:s', strtotime($request->time) + 15 * 60)
        ]);
        $time = date('H:i:s', strtotime($request->time) + 15 * 60);
        return redirect()->route('reservation.done', ['time' => $time]); // รอเชื่อมหน้าหลังจอง
    }
    public function chooseMenu(Request $request, $id) {
        $tableid = $id;
        $minutes = 20;
        $values = [
            'menu_ID' => $request->menu_id,
            'menu_Name' => $request->menu_name,
            'prices' => $request->price,
            'count' => $request->count, 
        ];
        $existingCookie = request()->cookie('menu_cookie_'. $tableid);
        $existingOrders = json_decode($existingCookie, true);
        $existingOrders[] = $values;
        $cookieValue = json_encode($existingOrders);
        $cookie = Cookie::make('menu_cookie_'. $tableid, $cookieValue, $minutes);
        $notification = array(
            'message' => 'เลือกเมนูเรียบร้อย!',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.table', ['id' => $tableid])
                ->withCookie($cookie)
                ->with($notification);
    }
    public function showCart(Request $request) {
        $tableid = Route::current()->parameter('id'); // $tableid = $id;
        $orders = json_decode(request()->cookie('menu_cookie_' . $tableid), true);
        // dd($orders, $tableid);
        return view('customer/cart', compact('orders', 'tableid'));
    }
    public function clearCookie(Request $request, $tableid, $key) {
    {
            $cookieValue = request()->cookie('menu_cookie_'. $tableid);
            $values = json_decode($cookieValue, true);
            foreach ($values as $keys => $value) {
                if ($keys == $key) {
                    unset($values[$keys]);
                }
            }
            $updatedCookieValue = json_encode($values);
            $cookie = cookie('menu_cookie_'. $tableid, $updatedCookieValue, 20);
            $notification = array(
                'message' => 'ยกเลิกรายการเรียบร้อย!',
                'alert-type' => 'success'
            );
            return redirect(route('customer.table.cart', ['id' => $tableid]))
                    ->withCookie($cookie)
                    ->with($notification);
        }
    }
}
