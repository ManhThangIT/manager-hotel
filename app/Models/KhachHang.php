<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class KhachHang
 * @package App\Models
 * @version June 19, 2019, 3:29 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection hoadons
 * @property string khachHang_ten
 * @property string khachHang_soDienThoai
 * @property string khachHang_chungMinhThu
 * @property string khachHang_diaChi
 */
class KhachHang extends Model
{
    use SoftDeletes;

    public $table = 'khachhangs';
    protected $primaryKey = 'khachHang_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'khachHang_ten',
        'khachHang_soDienThoai',
        'khachHang_chungMinhThu',
        'khachHang_diaChi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'khachHang_ma' => 'integer',
        'khachHang_ten' => 'string',
        'khachHang_soDienThoai' => 'string',
        'khachHang_chungMinhThu' => 'string',
        'khachHang_diaChi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'khachHang_ten' => 'required',
        'khachHang_soDienThoai' => 'required',
        'khachHang_chungMinhThu' => 'required',
        'khachHang_diaChi' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function hoadons()
    {
        return $this->hasMany(\App\Models\Hoadon::class);
    }
}
