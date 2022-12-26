<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use App\Models\bangcanbo;
use App\Models\bangphongban;
use App\Models\bangluong;
use App\Models\bangchucvu;

class QuantriController extends Controller
{
    public function returnQuantri(){
        // lay ra thong tin can bo hien thi ra man hinh
        $canbos = bangcanbo::all();
        $phongbans = bangphongban::all();
        return view('QuanTri.quantri',['canbos'=>$canbos, 'phongbans'=>$phongbans]);
    }


    public function xoa(){
        // lay ra id cua can bo can xoa
        $idxoa = request()->input('idCanBoDangHienThi');
        DB::table('bangcanbo')->where('id',$idxoa)->delete();
        return redirect('/quantri');
    }
    
    public function loc(){
        // lay ra id cua can bo can xoa
        $loctencb = request()->input('locTenCanBo');
        $canbos = bangcanbo::query();
        $canbos->where('HoTen','LIKE','%'.$loctencb.'%');
        dd($canbos);
        
        return view('QuanTri.quantri',['canbos'=>$canbos]);
    }
    public function sapXepTheoTen_ASC(){
        $canbos = bangcanbo::orderBy('HoTen', 'ASC')->get();
        $phongbans = bangphongban::all(); 
        $luongs=bangluong::all();
        $chucvus=bangchucvu::all();
        return view('QuanTri.quantri', [
            'canbos' => $canbos,
            'phongbans'=>$phongbans,
            'chucvus' => $chucvus,
            'luongs'=>$luongs
        ]);
    }
    public function sapXepTheoTen_DESC(){
        $canbos = bangcanbo::orderBy('HoTen', 'DESC')->get();
        $phongbans = bangphongban::all(); 
        $luongs=bangluong::all();
        $chucvus=bangchucvu::all();
        return view('QuanTri.quantri', [
            'canbos' => $canbos,
            'phongbans'=>$phongbans,
            'chucvus' => $chucvus,
            'luongs'=>$luongs
        ]);
    }
    public function sapxepLuong_ASC(){
        $canbos = bangcanbo::select('*')
                ->join('bangluong', 'bangcanbo.MaLuong', '=', 'bangluong.id')
                ->orderby('bangluong.LuongCoBan', 'ASC')
                ->get();
        $phongbans = bangphongban::all(); 
        $luongs=bangluong::all();
        $chucvus=bangchucvu::all();
        return view('QuanTri.quantri', [
            'canbos' => $canbos,
            'phongbans'=>$phongbans,
            'chucvus' => $chucvus,
            'luongs'=>$luongs
        ]);
    }
    public function sapxepLuong_DESC(){
        $canbos = bangcanbo::select('*')
                ->join('bangluong', 'bangcanbo.MaLuong', '=', 'bangluong.id')
                ->orderby('bangluong.LuongCoBan', 'DESC')
                ->get();
        $phongbans = bangphongban::all(); 
        $luongs=bangluong::all();
        $chucvus=bangchucvu::all();
        return view('QuanTri.quantri', [
            'canbos' => $canbos,
            'phongbans'=>$phongbans,
            'chucvus' => $chucvus,
            'luongs'=>$luongs
        ]);
    }
    
}
