<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BangGia
 * @package App\Models
 * @version June 19, 2019, 3:37 pm UTC
 *
 * @property \App\Models\Kieuthue banggiaMakieuthue
 * @property \App\Models\Loaiphong banggiaMaloaiphong
 * @property \Illuminate\Database\Eloquent\Collection
 * @property integer bangGia_maKieuThue
 * @property float bangGia_giaTien
 */
class BangGia extends Model
{
    use SoftDeletes;

    public $table = 'banggias';
    protected $primaryKey = 'bangGia_maLoaiPhong';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'bangGia_maKieuThue',
        'bangGia_giaTien'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bangGia_maLoaiPhong' => 'integer',
        'bangGia_maKieuThue' => 'integer',
        'bangGia_giaTien' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bangGia_maKieuThue' => 'required',
        'bangGia_giaTien' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function banggiaMakieuthue()
    {
        return $this->belongsTo(\App\Models\Kieuthue::class, 'bangGia_maKieuThue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function banggiaMaloaiphong()
    {
        return $this->belongsTo(\App\Models\Loaiphong::class, 'bangGia_maLoaiPhong');
    }
}
