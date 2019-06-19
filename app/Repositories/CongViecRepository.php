<?php

namespace App\Repositories;

use App\Models\CongViec;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CongViecRepository
 * @package App\Repositories
 * @version June 19, 2019, 2:43 pm UTC
 *
 * @method CongViec findWithoutFail($id, $columns = ['*'])
 * @method CongViec find($id, $columns = ['*'])
 * @method CongViec first($columns = ['*'])
*/
class CongViecRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'congViec_ten',
        'congViec_luong'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CongViec::class;
    }
}
