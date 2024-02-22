<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    function managemenuPage() {
        return view('manager/managemenu');
    }
    
}
