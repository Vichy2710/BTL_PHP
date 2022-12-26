<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangcanbo;
use Illuminate\Support\Facades\DB;
class QuanTriThemController extends Controller
{
    public function returnQuantrithem(){
        
        return view('QuanTriThem.quantrithem');
    }
    // them can bo vao danh sach 
    public  function them(){
        
        $canbo = new bangcanbo();
        $canbo->id = request()->input('themid');
        $canbo->HoTen = request()->input('themten');
        $canbo->Email = request()->input('thememail');
        $canbo->DiaChi = request()->input('themdiachi');
        $canbo->GioiTinh = request()->input('themgioitinh');
        $canbo->SoTaiKhoan = request()->input('themstk');
        $canbo->NgaySinh = request()->input('themngaysinh');
        $canbo->CCDC = request()->input('themcc');
        $canbo->sdt = request()->input('themsdt');
        $canbo->MaLuong = request()->input('themmaluong');
        $canbo->MaPB = request()->input('themmaphong');
        $canbo->MaHV = request()->input('themmahv');
        $canbo->MaCV = request()->input('themmacv');
        
        // check id existed
        $canbos = json_decode(DB::table('bangcanbo')->get(),true);
        foreach($canbos as $x){
            if($x['id']== $canbo->id){
                return redirect('/quantri');
            }
        }
        
        // save to database
        $canbo->save();
        return redirect('/quantri');
    }
    
}
