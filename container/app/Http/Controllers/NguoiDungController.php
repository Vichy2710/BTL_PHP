<?php

namespace App\Http\Controllers;

use App\Models\banghocvan;
use App\Models\bangluong;
use App\Models\bangphongban;
use App\Models\bangcanbo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function returnNguoidung(){
        // lay tkcanbo sau khi dang nhap thanh cong va hien thi ra man hinh
        $idcanbo = request()->session()->get('tkcanbo');
        $canbo = bangcanbo::Find($idcanbo);
        $luongs = bangluong::all();
        $hocvans = banghocvan::all();
        $phongbans = bangphongban::all();
        return view('NguoiDung.nguoidung',['canbo'=>$canbo, 'luongs'=>$luongs,'hocvans'=>$hocvans,'phongbans'=>$phongbans]);
    }
}
