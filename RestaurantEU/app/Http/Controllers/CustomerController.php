<?php

namespace App\Http\Controllers;

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
        if (!$gettable) {
            return '<h1>busy</h1>';
        }
        $data = [
            'table_id' => $tableid,
            'isIdle' => 1
        ];
        return view('customer/home', compact('tableid'));
    }
    function customerOrder(Request $request, $tableid) {
        // $id = Route::current()->parameter('id');
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
        DB::table('bill')->insert([
            'table_id' => $tableid,
            'order_id' => $getOrderID,
            'totalprice' => $totalAmount,
            'isPaid' => false,
        ]);
        $notification = array(
            'message' => 'สั่งเมนูเรียบร้อย!',
            'alert-type' => 'success'
        );
        return view('customer/orderlist')->with($notification);
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
    public function deletereserve($id) {
        DB::table('reservation')->where('reserveid', $id)->delete();
        $notification = array(
            'message' => 'ยกเลิกรายการเรียบร้อย!',
            'alert-type' => 'success'
        );
        return redirect()->route('showreserve')->with($notification);
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
        // dd($tableid);
        $orders = json_decode(request()->cookie('menu_cookie_' . $tableid), true);
        // dd($orders);
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
    // public function storemenu(Request $request)
    // {
    //     $id = Route::current()->parameter('id');
    //     $order = DB::table('order')->insert([
    //         'table_id' => $id,
    //         'order_time' => time()
    //     ]);
    //     $orderdetails = DB::table('orderdetails');
    //     foreach ($request->menus as $menu) {
    //         $order->$orderdetails->create([
    //             'menu_id' => $menu['id'],
    //             'quantity' => $menu['quantity'],
    //             'order_status' => 'in-line',
    //         ]);
    //     }
    //     return response()->json(['message' => 'Order created successfully'], 201);
    // }

}
