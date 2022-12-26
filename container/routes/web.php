<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuantriController;
use App\Http\Controllers\ThongkeController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\NguoiDungSuaController;
use App\Http\Controllers\QuanTriSuaController;
use App\Http\Controllers\QuanTriThemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('TrangChu/home');
});
Route::post('/check', [
    HomeController::class,
    'dangnhap'
]);

Route::get('/quantri', [
    QuantriController::class,
    'returnQuantri'
]);


// Route::post('/quantri', [
//     QuantriController::class,
//     'returnQuantri'
// ]);

Route::get('/thongke', [
    ThongKeController::class,
    'returnThongke'
]);
Route::get('/nguoidung', [
    NguoiDungController::class,
    'returnNguoidung'
]);
Route::post('/nguoidungsua', [
    NguoiDungSuaController::class,
    'returnNguoidungsua'
]);
Route::post('/quantrisua', [
    QuanTriSuaController::class,
    'returnQuantrisua'
]);
Route::get('/quantrithem', [
    QuanTriThemController::class,
    'returnQuantrithem'
]);
Route::post('/add', [
    QuanTriThemController::class,
    'them'
]);
Route::post('/xoa',[
    QuantriController::class,
    'xoa'
]);
Route::post('/loccanbo',[
    QuantriController::class,
    'loc'
]);
Route::post('/capnhat',[
    QuantriSuaController::class,
    'sua'
]);

Route::post('/capnhatnguoidung',[
    NguoiDungSuaController::class,
    'suaNguoiDung'
]);
Route::get('/sapXepTenAZ',[
    QuantriController::class,
    'sapXepTheoTen_ASC'
]);
Route::get('/sapXepTenZA',[
    QuantriController::class,
    'sapXepTheoTen_DESC'
]);
Route::get('/sapxepLuongCT',[
    QuantriController::class,
    'sapxepLuong_ASC'
]);
Route::get('/sapxepLuongTC',[
    QuantriController::class,
    'sapxepLuong_DESC'
]);