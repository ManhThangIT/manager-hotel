<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class NhanVien
{
    use Notifiable;

    public $table = 'nhanviens';


    public $fillable = [
        'nhanVien_ten',
        'nhanVien_ngaySinh',
        'nhanVien_soDienThoai',
        'nhanVien_email',
        'nhanVien_gioiTinh',
        'nhanVien_diaChi',
        'nhanVien_anh',
        'nhanVien_maCongViec'
    ];

}
