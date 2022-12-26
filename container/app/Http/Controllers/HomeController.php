<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\bangcanbo;
use App\Models\bangphongban;
use Illuminate\Contracts\Session\Session;

class HomeController extends Controller
{
    
    // xu ly dang nhap
    public function dangnhap(){
        
        $email = request()->input('email');
        $password = request()->input('password');
        $users = json_decode(DB::table('Users')->get(),true);
        $canbos = json_decode(DB::table('bangcanbo')->get(),true);
        $tkadmin=null;
        $check=false;
        // kiem tra tai khoan co la admin khong
        foreach($users as $user){
            if($user['email']==$email and $user['password']==$password){
                $tkadmin=$user;
                $check=true;
                // echo "<script type='text/javascript'>alert('Là admin');</script>";

                return redirect('/quantri');
            }elseif($user['email']==$email and $user['password']!=$password){
                echo "<script type='text/javascript'>alert('Sai mật khẩu!');</script>";

            }
        }

        // kiem tra tai khoan co la can bo khong
        $tkcanbo=null;
        if(!$check){
            foreach($canbos as $canbo){
                if($canbo['Email']==$email and 1==$password){
                    $tkcanbo=$canbo['id'];
                    $check=true;
                    request()->session()->put('tkcanbo', $tkcanbo);
                    echo "<script type='text/javascript'>alert('Là cán bộ');</script>";
                    return redirect('/nguoidung');
                }elseif( ($password!=1 and $canbo['Email']==$email)  ){
                    echo "<script type='text/javascript'>alert('Sai mật khẩu!');</script>";
    
                }
            }
        }
        return redirect('');
        
    }


}
