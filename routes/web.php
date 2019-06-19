<?php

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::resource('users', 'UserController');

Route::resource('nhanViens', 'NhanVienController');

Route::resource('congViecs', 'CongViecController');

Route::resource('tangs', 'TangController');

Route::resource('loaiPhongs', 'LoaiPhongController');

Route::resource('kieuThues', 'KieuThueController');

Route::resource('trangThaiPhongs', 'TrangThaiPhongController');

Route::resource('tinhTrangHoaDons', 'TinhTrangHoaDonController');

Route::resource('khachHangs', 'KhachHangController');

Route::resource('dichVus', 'DichVuController');

Route::resource('bangGias', 'BangGiaController');