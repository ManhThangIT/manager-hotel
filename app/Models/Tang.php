<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tang
 * @package App\Models
 * @version June 19, 2019, 2:59 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection phongs
 * @property string tang_ten
 */
class Tang extends Model
{
    use SoftDeletes;

    public $table = 'tangs';
    protected $primaryKey = 'tang_ma';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tang_ten'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tang_ma' => 'integer',
        'tang_ten' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tang_ten' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function phongs()
    {
        return $this->hasMany(\App\Models\Phong::class);
    }
}
