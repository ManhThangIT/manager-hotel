<?php

namespace App\Repositories;

use App\Models\TrangThaiPhong;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrangThaiPhongRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:17 pm UTC
 *
 * @method TrangThaiPhong findWithoutFail($id, $columns = ['*'])
 * @method TrangThaiPhong find($id, $columns = ['*'])
 * @method TrangThaiPhong first($columns = ['*'])
*/
class TrangThaiPhongRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'trangThaiPhong_ten'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TrangThaiPhong::class;
    }
}
