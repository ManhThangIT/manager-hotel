<?php

namespace App\Repositories;

use App\Models\DichVu;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DichVuRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:34 pm UTC
 *
 * @method DichVu findWithoutFail($id, $columns = ['*'])
 * @method DichVu find($id, $columns = ['*'])
 * @method DichVu first($columns = ['*'])
*/
class DichVuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dichVu_ten',
        'dichVu_gia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DichVu::class;
    }
}
