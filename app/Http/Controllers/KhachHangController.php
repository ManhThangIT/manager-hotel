<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKhachHangRequest;
use App\Http\Requests\UpdateKhachHangRequest;
use App\Repositories\KhachHangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\KhachHang;
use DB;

class KhachHangController extends AppBaseController
{
    /** @var  KhachHangRepository */
    private $khachHangRepository;

    public function __construct(KhachHangRepository $khachHangRepo)
    {
        $this->khachHangRepository = $khachHangRepo;
    }

    /**
     * Display a listing of the KhachHang.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $khachHangs = KhachHang::all();

        return view('khach_hangs.index')
            ->with('khachHangs', $khachHangs);
    }

    /**
     * Show the form for creating a new KhachHang.
     *
     * @return Response
     */
    public function create()
    {
        return view('khach_hangs.create');
    }

    /**
     * Store a newly created KhachHang in storage.
     *
     * @param CreateKhachHangRequest $request
     *
     * @return Response
     */
    public function store(CreateKhachHangRequest $request)
    {
        $input = $request->all();

        $khachHang = $this->khachHangRepository->create($input);

        Flash::success('Khach Hang saved successfully.');

        return redirect(route('khachHangs.index'));
    }

    /**
     * Display the specified KhachHang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $khachHang = $this->khachHangRepository->findWithoutFail($id);

        if (empty($khachHang)) {
            Flash::error('Khach Hang not found');

            return redirect(route('khachHangs.index'));
        }

        return view('khach_hangs.show')->with('khachHang', $khachHang);
    }

    /**
     * Show the form for editing the specified KhachHang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $khachHang = $this->khachHangRepository->findWithoutFail($id);

        if (empty($khachHang)) {
            Flash::error('Khach Hang not found');

            return redirect(route('khachHangs.index'));
        }

        return view('khach_hangs.edit')->with('khachHang', $khachHang);
    }

    /**
     * Update the specified KhachHang in storage.
     *
     * @param  int              $id
     * @param UpdateKhachHangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKhachHangRequest $request)
    {
        $khachHang = $this->khachHangRepository->findWithoutFail($id);

        if (empty($khachHang)) {
            Flash::error('Khach Hang not found');

            return redirect(route('khachHangs.index'));
        }

        $khachHang = $this->khachHangRepository->update($request->all(), $id);

        Flash::success('Khach Hang updated successfully.');

        return redirect(route('khachHangs.index'));
    }

    /**
     * Remove the specified KhachHang from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $khachHang = $this->khachHangRepository->findWithoutFail($id);

        if (empty($khachHang)) {
            Flash::error('Khach Hang not found');

            return redirect(route('khachHangs.index'));
        }

        $this->khachHangRepository->delete($id);

        Flash::success('Khach Hang deleted successfully.');

        return redirect(route('khachHangs.index'));
    }
}
