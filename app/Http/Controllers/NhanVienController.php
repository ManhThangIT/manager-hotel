<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNhanVienRequest;
use App\Http\Requests\UpdateNhanVienRequest;
use App\Repositories\NhanVienRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\NhanVien;
use DB;

class NhanVienController extends AppBaseController
{
    /** @var  NhanVienRepository */
    private $nhanVienRepository;

    public function __construct(NhanVienRepository $nhanVienRepo)
    {
        $this->nhanVienRepository = $nhanVienRepo;
    }

    public function index(Request $request)
    {

        $nhanvien = NhanVien::all();

        return view('nhan_viens.index')
            ->with('nhanViens', $nhanvien);
    }

    /**
     * Show the form for creating a new NhanVien.
     *
     * @return Response
     */
    public function create()
    {
        return view('nhan_viens.create');
    }

    /**
     * Store a newly created NhanVien in storage.
     *
     * @param CreateNhanVienRequest $request
     *
     * @return Response
     */
    public function store(CreateNhanVienRequest $request)
    {
        $input = $request->all();

        $nhanVien = $this->nhanVienRepository->create($input);

        Flash::success('Nhan Vien saved successfully.');

        return redirect(route('nhanViens.index'));
    }

    public function show($id)
    {
        $nhanVien = $this->nhanVienRepository->findWithoutFail($id);

        if (empty($nhanVien)) {
            Flash::error('Nhan Vien not found');

            return redirect(route('nhanViens.index'));
        }

        return view('nhan_viens.show')->with('nhanVien', $nhanVien);
    }

    public function edit($nhanVien_ma)
    {

        $nhanvien = NhanVien::find($nhanVien_ma);
        // dd($nhanvien);

        return view('nhan_viens.edit')->with('nhanVien', $nhanvien);
    }


    public function update($nhanVien_ma, UpdateNhanVienRequest $request)
    {
        User::where('nhanVien_ma', $nhanVien_ma)
        ->update([
            'nhanVien_ten' => $request->input('nhanVien_ten'),
            'nhanVien_ngaySinh' => $request->input('nhanVien_ngaySinh'),
            'nhanVien_soDienThoai' => $request->input('nhanVien_soDienThoai'),
            'nhanVien_email' => $request->input('nhanVien_email'),
            'nhanVien_gioiTinh' => $request->input('nhanVien_gioiTinh'),
            'nhanVien_diaChi' => $request->input('nhanVien_diaChi'),
            'nhanVien_anh' => $request->input('nhanVien_anh'),
            'nhanVien_maCongViec' => $request->input('nhanVien_maCongViec'),
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }


    public function destroy($nhanVien_ma)
    {
        $nhanVien = NhanVien::where('nhanVien_ma', $nhanVien_ma)->delete();

        if (empty($nhanVien)) {
            Flash::error('Nhan Vien not found');

            return redirect(route('nhanViens.index'));
        }

        Flash::success('Nhan Vien deleted successfully.');

        return redirect(route('nhanViens.index'));
    }
}
