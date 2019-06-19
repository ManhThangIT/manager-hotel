<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class KieuThue
 * @package App\Models
 * @version June 19, 2019, 3:13 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection loaiphongs
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection chitiethoadonphongs
 * @property string kieuThue_ten
 */
class KieuThue extends Model
{
    use SoftDeletes;

    public $table = 'kieuthues';
    protected $primaryKey = 'kieuThue_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'kieuThue_ten'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kieuThue_ma' => 'integer',
        'kieuThue_ten' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kieuThue_ten' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function loaiphongs()
    {
        return $this->belongsToMany(\App\Models\Loaiphong::class, 'banggias');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chitiethoadonphongs()
    {
        return $this->hasMany(\App\Models\Chitiethoadonphong::class);
    }
}
