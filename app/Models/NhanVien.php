<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NhanVien
 * @package App\Models
 * @version June 19, 2019, 9:14 am UTC
 *
 * @property \App\Models\Congviec nhanvienMacongviec
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property string nhanVien_ten
 * @property string nhanVien_ngaySinh
 * @property string nhanVien_soDienThoai
 * @property string nhanVien_email
 * @property integer nhanVien_gioiTinh
 * @property string nhanVien_diaChi
 * @property string nhanVien_anh
 * @property integer nhanVien_maCongViec
 */
class NhanVien extends Model
{
    use SoftDeletes;

    public $table = 'nhanviens';
    protected $primaryKey = 'nhanVien_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


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

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nhanVien_ma' => 'integer',
        'nhanVien_ten' => 'string',
        'nhanVien_ngaySinh' => 'date',
        'nhanVien_soDienThoai' => 'string',
        'nhanVien_email' => 'string',
        'nhanVien_gioiTinh' => 'integer',
        'nhanVien_diaChi' => 'string',
        'nhanVien_anh' => 'string',
        'nhanVien_maCongViec' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nhanVien_ma' => 'required',
        'nhanVien_ten' => 'required',
        'nhanVien_ngaySinh' => 'required',
        'nhanVien_soDienThoai' => 'required',
        'nhanVien_email' => 'required',
        'nhanVien_gioiTinh' => 'required',
        'nhanVien_diaChi' => 'required',
        'nhanVien_anh' => 'required',
        'nhanVien_maCongViec' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nhanvienMacongviec()
    {
        return $this->belongsTo(\App\Models\Congviec::class, 'nhanVien_maCongViec');
    }
}
