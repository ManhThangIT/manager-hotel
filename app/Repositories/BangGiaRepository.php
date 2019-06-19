<?php

namespace App\Repositories;

use App\Models\BangGia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BangGiaRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:37 pm UTC
 *
 * @method BangGia findWithoutFail($id, $columns = ['*'])
 * @method BangGia find($id, $columns = ['*'])
 * @method BangGia first($columns = ['*'])
*/
class BangGiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bangGia_maKieuThue',
        'bangGia_giaTien'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BangGia::class;
    }
}
