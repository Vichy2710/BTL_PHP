<?php

namespace App\Http\Controllers;
use App\Models\bangcanbo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NguoiDungSuaController extends Controller
{
    public function returnNguoidungsua(){
        $id = request()->input('idsuaNguoiDung');
        session()->put('idsuanguoidung', $id);
        $canbos = json_decode(DB::table('bangcanbo')->get(),true);
        $cb= new bangcanbo();
        foreach($canbos as $canbo){
            if($canbo['id']==$id){
                $cb=$canbo;
                
            }
        }
        return view('NguoiDungSua/nguoidungsua',['cb'=>$cb]);
    }
    public function suaNguoiDung(){

        $id = session()->get('idsuanguoidung');
        // tim can bo co id = $id
        $canbo = bangcanbo::Find($id);

        $canbo['DiaChi'] = request()->input('suadiachi');
        $canbo['GioiTinh'] = request()->input('suagioitinh');
        $canbo['NgaySinh'] = request()->input('suangaysinh');

        // save data
        $canbo->save();
        
        return redirect('/nguoidung');

    }
}
