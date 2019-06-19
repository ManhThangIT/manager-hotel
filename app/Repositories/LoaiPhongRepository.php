<?php

namespace App\Repositories;

use App\Models\LoaiPhong;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LoaiPhongRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:07 pm UTC
 *
 * @method LoaiPhong findWithoutFail($id, $columns = ['*'])
 * @method LoaiPhong find($id, $columns = ['*'])
 * @method LoaiPhong first($columns = ['*'])
*/
class LoaiPhongRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'loaiPhong_ten',
        'loaiPhong_soNguoiToiDa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LoaiPhong::class;
    }
}
