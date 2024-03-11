<?php

namespace App\Http\Controllers;
use App\Events\OrderListEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaiterController extends Controller
{
    function servedone() {
        return view('waiter/servedone');
    }
    function updateserved($id) {
        DB::table('order')
            ->where('order_id', $id)
            ->update(['status' => 'complete']);
        $notification = array(
            'message' => 'ทำอาหารเสร็จสิ้น',
            'alert-type' => 'success'
        );
        event(new OrderListEvent(1, 2));
        return redirect()->route('waiter.readytoserve')->with($notification);
    }
}
