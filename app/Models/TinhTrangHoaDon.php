<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TinhTrangHoaDon
 * @package App\Models
 * @version June 19, 2019, 3:22 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection hoadons
 * @property string tinhTrangHoaDon_ten
 */
class TinhTrangHoaDon extends Model
{
    use SoftDeletes;

    public $table = 'tinhtranghoadons';
    protected $primaryKey = 'tinhTrangHoaDon_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tinhTrangHoaDon_ten'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tinhTrangHoaDon_ma' => 'integer',
        'tinhTrangHoaDon_ten' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tinhTrangHoaDon_ten' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function hoadons()
    {
        return $this->hasMany(\App\Models\Hoadon::class);
    }
}
