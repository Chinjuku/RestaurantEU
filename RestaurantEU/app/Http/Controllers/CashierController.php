<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CashierController extends Controller
{
    function getbill() {
        return view('cashier/bill');
    }
    function updateserved(Request $request, $tableid, $orderid) {
        DB::table('orderdetails')->where('order_id', $orderid and 'table_id', $tableid)->update(['order_status', 'done']);
        return view('waiter/serving');
    }
}
