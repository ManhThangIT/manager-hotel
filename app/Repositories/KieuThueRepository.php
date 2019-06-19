<?php

namespace App\Repositories;

use App\Models\KieuThue;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KieuThueRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:13 pm UTC
 *
 * @method KieuThue findWithoutFail($id, $columns = ['*'])
 * @method KieuThue find($id, $columns = ['*'])
 * @method KieuThue first($columns = ['*'])
*/
class KieuThueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kieuThue_ten'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return KieuThue::class;
    }
}
