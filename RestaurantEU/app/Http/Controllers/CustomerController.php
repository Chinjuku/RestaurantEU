<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

class CustomerController extends Controller
{
    function reservationForm() {
        return view('customer/reservation/form');
    }
    function reservationHome() {
        return view('customer/reservation/home');
    }
    function reservationdone() {
        return view('customer/reservation/done');
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
    // function customerCart() {
    //     $id = Route::current()->parameter('id');
    //     // dd($id);
    //     $gettable = DB::table('table')->where('table_id', $id)->where('isIdle', 0)->first();
    //     $createOrder = DB::table('order');
    //     if (!$gettable) {
    //         return '<h1>busy</h1>';
    //     }
    //     $data = [
    //         'table_id' => $id,
    //         'isIdle' => 1
    //     ];
    //     // DB::table('table')->where('table_id', $id)->update($data);
    //     return view('customer/cart', compact('id'));
    // }
    function customerOrder(Request $request, $tableid) {
        // $id = Route::current()->parameter('id');
        $getCookie = request()->cookie('menu_cookie');
        DB::table('order')->insert([
            'table_id' => $tableid,
            'order_time' => time()
        ]);
        $getorders = DB::table('order')->where('tableid', $tableid)->first();
        $orderdetails = DB::table('orderdetails')->where('tableid', $tableid)->insert([
            'order_id' => $getorders->order_id,
            // 'menu_id' => $menu_id,
        ]);
        
        // $gettable = DB::table('table')->where('table_id', $id)->where('isIdle', 0)->first();
        // $createOrder = DB::table('order');
        // if (!$gettable) {
        //     return '<h1>busy</h1>';
        // }
        // $data = [
        //     'table_id' => $id,
        //     'isIdle' => 1
        // ];
        // DB::table('table')->where('table_id', $id)->update($data);
        return view('customer/orderlist');
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
        return redirect()->route('reservation.done'); // รอเชื่อมหน้าหลังจอง
    }
    public function chooseMenu(Request $request, $id) {
        $minutes = 10;
        $values = [
            'menu_ID' => $request->menu_id,
            'menu_Name' => $request->menu_name,
            'prices' => $request->price,
            'count' => $request->count, 
        ];
        $existingCookie = request()->cookie('menu_cookie');
        $existingOrders = json_decode($existingCookie, true);
        $existingOrders[] = $values;
        $cookieValue = json_encode($existingOrders);
        $cookie = Cookie::make('menu_cookie', $cookieValue, $minutes);
        $tableid = $id;
        // dd($tableid);
        $notification = array(
            'message' => 'เลือกเมนูเรียบร้อย!',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.table', ['id' => $tableid])
                ->withCookie($cookie)
                ->with($notification);
                // ->with('success', 'เลือกอาหารละจ้า');
    }
    public function showCart(Request $request) {
        $tableid = Route::current()->parameter('id'); // $tableid = $id;
        $orders = json_decode(request()->cookie('menu_cookie'), true);
        // dd($orders);
        return view('customer/cart', compact('orders', 'tableid'));
    }
    public function clearCookie(Request $request, $tableid, $key) {
    {
            $cookieValue = request()->cookie('menu_cookie');
            $values = json_decode($cookieValue, true);
            foreach ($values as $keys => $value) {
                if ($keys == $key) {
                    unset($values[$keys]);
                }
            }
            // dd($values);
            $updatedCookieValue = json_encode($values);
            // Set the updated cookie value
            $cookie = cookie('menu_cookie', $updatedCookieValue, 10);
            $notification = array(
                'message' => 'ยกเลิกรายการเรียบร้อย!',
                'alert-type' => 'success'
            );
            // Redirect to the cart page with the updated cookie
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
