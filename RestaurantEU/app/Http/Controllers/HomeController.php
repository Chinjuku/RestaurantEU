<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth'); //เพื่มความปลอดภัยให้web
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth/login');
    }
    public function managerHome()
    {
        // Get all orders
        $allorder = DB::table('bill')->join('order', 'bill.order_id', '=', 'order.order_id')->get()->count('order_id');
        // Allin db
        $getall = DB::table('bill')->join('order', 'bill.order_id', '=', 'order.order_id')
            ->join('orderdetails', 'orderdetails.order_id', '=', 'order.order_id')
            ->join('menu', 'menu.menu_id', '=', 'orderdetails.menu_id')
            ->get()
            ->map(function ($time) {
                $time->formattedOrderTime = Carbon::parse($time->order_time)->locale('th')->format('Y-m-d');
            return $time; 
        });
        $currentDate = Carbon::now()->locale('th')->format('Y-m-d');
        //get billdate and totalprice
        $weekanddate = DB::table('bill')
        ->join('order', 'bill.order_id', '=', 'order.order_id')->get()
        ->map(function ($time) {
            $time->formatDate = Carbon::parse($time->order_time)->locale('th')->format('Y-m-d');
        return $time;})
        ->map(function ($time) {
            $time->formatDDDD = Carbon::parse($time->order_time)->locale('th')->isoFormat('dddd');
        return $time;
        });
        $totalperday = $weekanddate
            ->where('formatDate', $currentDate)
            ->sum('totalprice'); 
        
        // dd($currentDate, $totalperday, $getall, $weekanddate, $allorder);
        return view('manager/dashboard', compact('allorder'));
    }

    public function chefHome()
    {
        return view('chef/neworder');
    }

    public function waiterHome()
    {
        DB::table('orderdetails')->where('order_status', 'serving')->get();
        return view('waiter/readytoserve');
    }

    public function cashierHome()
    {
        return view('cashier/home');
    }
    public function showReserve() 
    {
        return view('show-reserve');
    }
}
