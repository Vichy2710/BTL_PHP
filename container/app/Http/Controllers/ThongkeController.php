<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThongkeController extends Controller
{
    public function returnThongke(){
        return view('ThongKe.thongke');
    }
}
