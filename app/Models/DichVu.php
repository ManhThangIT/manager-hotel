<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DichVu
 * @package App\Models
 * @version June 19, 2019, 3:34 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection hoadons
 * @property string dichVu_ten
 * @property float dichVu_gia
 */
class DichVu extends Model
{
    use SoftDeletes;

    public $table = 'dichvus';
    protected $primaryKey = 'dichVu_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'dichVu_ten',
        'dichVu_gia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dichVu_ma' => 'integer',
        'dichVu_ten' => 'string',
        'dichVu_gia' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dichVu_ten' => 'required',
        'dichVu_gia' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function hoadons()
    {
        return $this->belongsToMany(\App\Models\Hoadon::class, 'chitiethoadondichvus');
    }
}
