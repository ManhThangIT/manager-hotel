<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CongViec
 * @package App\Models
 * @version June 19, 2019, 2:43 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection nhanviens
 * @property string congViec_ten
 * @property float congViec_luong
 */
class CongViec extends Model
{
    use SoftDeletes;

    public $table = 'congviecs';
    protected $primaryKey = 'congViec_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'congViec_ten',
        'congViec_luong'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'congViec_ma' => 'integer',
        'congViec_ten' => 'string',
        'congViec_luong' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'congViec_ten' => 'required',
        'congViec_luong' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function nhanviens()
    {
        return $this->hasMany(\App\Models\Nhanvien::class);
    }
}
