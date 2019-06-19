<?php

namespace App\Repositories;

use App\Models\NhanVien;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NhanVienRepository
 * @package App\Repositories
 * @version June 19, 2019, 9:14 am UTC
 *
 * @method NhanVien findWithoutFail($id, $columns = ['*'])
 * @method NhanVien find($id, $columns = ['*'])
 * @method NhanVien first($columns = ['*'])
*/
class NhanVienRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nhanVien_ten',
        'nhanVien_ngaySinh',
        'nhanVien_soDienThoai',
        'nhanVien_email',
        'nhanVien_gioiTinh',
        'nhanVien_diaChi',
        'nhanVien_anh',
        'nhanVien_maCongViec'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NhanVien::class;
    }
}
