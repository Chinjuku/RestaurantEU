<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    function showmenu() {
        return view('manager/managemenu');
    }
    function addmenu(Request $request) {
        $request->validate(
            [
            //     'name' => 'required|min:2',
            //     'lastname' => 'required|min:2',
            //     'phone' => 'required',
            //     'roles' => 'required',
            // ],
            // [
            //     'firstname.required' => 'กรุณากรอกชื่อจริงพนักงาน',
            //     'lastname.required' => 'กรุณากรอกนามสกุลพนักงาน',
            //     'phone.required' => 'กรุณากรอกชื่อจริงพนักงาน',
            //     'roles.required' => 'กรุณากรอกชื่อจริงพนักงาน'
            ]);
        DB::table('menu')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
        ]);
        return redirect()->route('manager.menu')->with('success', 'เพิ่มเมนูใหม่เรียบร้อยจ้า');
    }
    function updatemenu(Request $request, $id) {
        DB::table('menu')->where('menu_id', $id)->first();
        $update = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
        ];
        DB::table('menu')->where('id', $id)->update($update);
    }
    function deletemenu($id) {
        DB::table('menu')->where('id', $id)->delete();
        return redirect()->route('manager.home')->with('success', 'ลบพนักงานเรียบร้อยจ้า');
    }

    function addEmployee(Request $request) {
        $request->validate(
        [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required',
            'roles' => 'required',
        ],
        [
            'firstname.required' => 'กรุณากรอกชื่อจริงพนักงาน',
            'lastname.required' => 'กรุณากรอกนามสกุลพนักงาน',
            'phone.required' => 'กรุณากรอกชื่อจริงพนักงาน',
            'roles.required' => 'กรุณากรอกชื่อจริงพนักงาน',
            'firstname.min' => 'กรุณากรอกชื่อจริงอย่างน้อย 2 ตัวอักษร',
            'lastname.min' => 'กรุณากรอกชื่อจริงอย่างน้อย 2 ตัวอักษร'
        ]);

        DB::table('employee')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'roles' => $request->roles,
            'createAt' => time()
        ]);
        return redirect()->route('manager.home')->with('success', 'เพิ่มพนักงานใหม่เรียบร้อยจ้า');
    }
    function deleteEmployee($id) {
        DB::table('employee')->where('id', $id)->delete();
        return redirect()->route('manager.home')->with('success', 'ลบพนักงานเรียบร้อยจ้า');
    }
    function updateEmployee(Request $request, $id) {
        // DB::table('employee')->where('employee_id', $id)->first();
        $update = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'roles' => $request->roles,
            'createAt' => time()
        ];
        DB::table('employee')->where('employee_id', $id)->update($update);
    }
}
