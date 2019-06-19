<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LoaiPhong
 * @package App\Models
 * @version June 19, 2019, 3:07 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection kieuthues
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection phongs
 * @property string loaiPhong_ten
 * @property integer loaiPhong_soNguoiToiDa
 */
class LoaiPhong extends Model
{
    use SoftDeletes;

    public $table = 'loaiphongs';
    protected $primaryKey = 'loaiPhong_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'loaiPhong_ten',
        'loaiPhong_soNguoiToiDa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'loaiPhong_ma' => 'integer',
        'loaiPhong_ten' => 'string',
        'loaiPhong_soNguoiToiDa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'loaiPhong_ten' => 'required',
        'loaiPhong_soNguoiToiDa' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function kieuthues()
    {
        return $this->belongsToMany(\App\Models\Kieuthue::class, 'banggias');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function phongs()
    {
        return $this->hasMany(\App\Models\Phong::class);
    }
}
