<?php

namespace App\Http\Controllers;
use App\Models\bangcanbo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuanTriSuaController extends Controller
{
    public function returnQuantrisua(){
        $idsua = request()->input('idCanBoDangHienThi');
        session()->put('idsua', $idsua);
        $canbos = json_decode(DB::table('bangcanbo')->get(),true);
        $cb= new bangcanbo();
        foreach($canbos as $canbo){
            if($canbo['id']==$idsua){
                $cb=$canbo;
            }
        }
        return view('QuanTriSua/quantrisua',['cb'=>$cb]);
       
    }
    public function sua(){

        $id = session()->get('idsua');

        // tim can bo co id = $id
        $canbo = bangcanbo::Find($id);

        
        $canbo['HoTen'] = request()->input('suahoten');
        $canbo['Email'] = request()->input('suaemail');
        $canbo['SoTaiKhoan'] = request()->input('suastk');
        $canbo['CCDC'] = request()->input('suadiachi');
        $canbo['sdt'] = request()->input('suasdt');
        $canbo['MaLuong'] = request()->input('suamaluong');
        $canbo['MaPB'] = request()->input('suamaphong');
        $canbo['MaHV'] = request()->input('suamahv');
        $canbo['MaCV'] = request()->input('suamacv');
        $canbo['MaHDLD'] = request()->input('suamahdld');
        $canbo['MaKTKL'] = request()->input('suamaktkl');
        $canbo['MaCC'] = request()->input('suamacc');

        // save data
        $canbo->save();
        
        return redirect('/quantri');

    }

}
