<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoaiPhongRequest;
use App\Http\Requests\UpdateLoaiPhongRequest;
use App\Repositories\LoaiPhongRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoaiPhong;
use DB;

class LoaiPhongController extends AppBaseController
{
    /** @var  LoaiPhongRepository */
    private $loaiPhongRepository;

    public function __construct(LoaiPhongRepository $loaiPhongRepo)
    {
        $this->loaiPhongRepository = $loaiPhongRepo;
    }

    /**
     * Display a listing of the LoaiPhong.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $loaiPhongs = LoaiPhong::all();

        return view('loai_phongs.index')
            ->with('loaiPhongs', $loaiPhongs);
    }

    /**
     * Show the form for creating a new LoaiPhong.
     *
     * @return Response
     */
    public function create()
    {
        return view('loai_phongs.create');
    }

    /**
     * Store a newly created LoaiPhong in storage.
     *
     * @param CreateLoaiPhongRequest $request
     *
     * @return Response
     */
    public function store(CreateLoaiPhongRequest $request)
    {
        $input = $request->all();

        $loaiPhong = $this->loaiPhongRepository->create($input);

        Flash::success('Loai Phong saved successfully.');

        return redirect(route('loaiPhongs.index'));
    }

    /**
     * Display the specified LoaiPhong.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $loaiPhong = $this->loaiPhongRepository->findWithoutFail($id);

        if (empty($loaiPhong)) {
            Flash::error('Loai Phong not found');

            return redirect(route('loaiPhongs.index'));
        }

        return view('loai_phongs.show')->with('loaiPhong', $loaiPhong);
    }

    /**
     * Show the form for editing the specified LoaiPhong.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $loaiPhong = $this->loaiPhongRepository->findWithoutFail($id);

        if (empty($loaiPhong)) {
            Flash::error('Loai Phong not found');

            return redirect(route('loaiPhongs.index'));
        }

        return view('loai_phongs.edit')->with('loaiPhong', $loaiPhong);
    }

    /**
     * Update the specified LoaiPhong in storage.
     *
     * @param  int              $id
     * @param UpdateLoaiPhongRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLoaiPhongRequest $request)
    {
        $loaiPhong = $this->loaiPhongRepository->findWithoutFail($id);

        if (empty($loaiPhong)) {
            Flash::error('Loai Phong not found');

            return redirect(route('loaiPhongs.index'));
        }

        $loaiPhong = $this->loaiPhongRepository->update($request->all(), $id);

        Flash::success('Loai Phong updated successfully.');

        return redirect(route('loaiPhongs.index'));
    }

    /**
     * Remove the specified LoaiPhong from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $loaiPhong = $this->loaiPhongRepository->findWithoutFail($id);

        if (empty($loaiPhong)) {
            Flash::error('Loai Phong not found');

            return redirect(route('loaiPhongs.index'));
        }

        $this->loaiPhongRepository->delete($id);

        Flash::success('Loai Phong deleted successfully.');

        return redirect(route('loaiPhongs.index'));
    }
}
