<?php

namespace App\Repositories;

use App\Models\TinhTrangHoaDon;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TinhTrangHoaDonRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:22 pm UTC
 *
 * @method TinhTrangHoaDon findWithoutFail($id, $columns = ['*'])
 * @method TinhTrangHoaDon find($id, $columns = ['*'])
 * @method TinhTrangHoaDon first($columns = ['*'])
*/
class TinhTrangHoaDonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tinhTrangHoaDon_ten'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TinhTrangHoaDon::class;
    }
}
