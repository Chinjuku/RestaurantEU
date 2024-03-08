<?php

namespace App\Http\Controllers;

use App\Events\OrderListEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChefController extends Controller
{
    function orderdone() {
        return view('chef/orderdone');
    }
    function updatecooked(Request $request, $tableid, $orderid) {
        $changestatus = DB::table('orderdetails')->where('order_id', $orderid and 'table_id', $tableid)->update(['order_status', 'serving']);
        return view('chef/cook', compact('changestatus'));
    }
    function clickDone($id) {
        DB::table('order')
            ->where('order_id', $id)
            ->update(['status' => 'serving']);
        $notification = array(
            'message' => 'ทำอาหารเสร็จสิ้น',
            'alert-type' => 'success'
        );
        return redirect()->route('chef.neworder')->with($notification);
    }
}
