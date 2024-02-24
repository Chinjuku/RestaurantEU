<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function reservation() {
        return view('customer/reservation');
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
        ]);
        // return redirect()->route('login'); // รอเชื่อมหน้าหลังจอง
    }
}
