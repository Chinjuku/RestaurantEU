<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefController extends Controller
{
    function orderdone() {
        return view('chef/orderdone');
    }
    function updatecooked(Request $request, $tableid, $orderid) {
        DB::table('orderdetails')->where('order_id', $orderid and 'table_id', $tableid)->update('order_status', 'serving');
        return view('chef/cook');
    }
}
