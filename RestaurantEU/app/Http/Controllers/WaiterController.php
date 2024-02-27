<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaiterController extends Controller
{
    // function serving() {
    //     DB::table('orderdetails')->where('order_status', 'serving')->get();
    //     return view('waiter/serving');
    // }
    function servedone() {
        // DB::table('orderdetails')->where('order_status', 'done')->get();
        return view('waiter/servedone');
    }
    function updateserved(Request $request, $tableid, $orderid) {
        DB::table('orderdetails')->where('order_id', $orderid and 'table_id', $tableid)->update(['order_status', 'done']);
        return view('waiter/serving');
    }
}
