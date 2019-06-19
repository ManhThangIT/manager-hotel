<?php

namespace App\Repositories;

use App\Models\Tang;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TangRepository
 * @package App\Repositories
 * @version June 19, 2019, 2:59 pm UTC
 *
 * @method Tang findWithoutFail($id, $columns = ['*'])
 * @method Tang find($id, $columns = ['*'])
 * @method Tang first($columns = ['*'])
*/
class TangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tang_ten'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tang::class;
    }
}
