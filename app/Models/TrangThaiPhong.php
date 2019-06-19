<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TrangThaiPhong
 * @package App\Models
 * @version June 19, 2019, 3:17 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection phongs
 * @property string trangThaiPhong_ten
 */
class TrangThaiPhong extends Model
{
    use SoftDeletes;

    public $table = 'trangthaiphongs';
    protected $primaryKey = 'trangThaiPhong_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'trangThaiPhong_ten'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'trangThaiPhong_ma' => 'integer',
        'trangThaiPhong_ten' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'trangThaiPhong_ten' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function phongs()
    {
        return $this->hasMany(\App\Models\Phong::class);
    }
}
