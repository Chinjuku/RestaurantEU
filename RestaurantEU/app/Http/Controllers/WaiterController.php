<?php

namespace App\Http\Controllers;

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
        return redirect()->route('waiter.readytoserve')->with($notification);
    }
}
