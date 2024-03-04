<?php

namespace App\Http\Controllers;

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
    function orderShow(Request $request, $id) {
        // change order status
        // DB::table('orderdetails')->where('order_id', $id)->update([
        //     'order_status' => 'in-process'
        // ]);
        DB::table('order')->where('order_id', $id)->update([
            'status' => 'cooking'
        ]);
        // dd($id);
        return redirect()->route('chef.neworder');
    }
}
