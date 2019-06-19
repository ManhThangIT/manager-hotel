<?php

namespace App\Repositories;

use App\Models\KhachHang;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KhachHangRepository
 * @package App\Repositories
 * @version June 19, 2019, 3:29 pm UTC
 *
 * @method KhachHang findWithoutFail($id, $columns = ['*'])
 * @method KhachHang find($id, $columns = ['*'])
 * @method KhachHang first($columns = ['*'])
*/
class KhachHangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'khachHang_ten',
        'khachHang_soDienThoai',
        'khachHang_chungMinhThu',
        'khachHang_diaChi'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return KhachHang::class;
    }
}
