<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrangThaiPhongRequest;
use App\Http\Requests\UpdateTrangThaiPhongRequest;
use App\Repositories\TrangThaiPhongRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\TrangThaiPhong;
use DB;

class TrangThaiPhongController extends AppBaseController
{
    /** @var  TrangThaiPhongRepository */
    private $trangThaiPhongRepository;

    public function __construct(TrangThaiPhongRepository $trangThaiPhongRepo)
    {
        $this->trangThaiPhongRepository = $trangThaiPhongRepo;
    }

    /**
     * Display a listing of the TrangThaiPhong.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $trangThaiPhongs = TrangThaiPhong::all();

        return view('trang_thai_phongs.index')
            ->with('trangThaiPhongs', $trangThaiPhongs);
    }

    /**
     * Show the form for creating a new TrangThaiPhong.
     *
     * @return Response
     */
    public function create()
    {
        return view('trang_thai_phongs.create');
    }

    /**
     * Store a newly created TrangThaiPhong in storage.
     *
     * @param CreateTrangThaiPhongRequest $request
     *
     * @return Response
     */
    public function store(CreateTrangThaiPhongRequest $request)
    {
        $input = $request->all();

        $trangThaiPhong = $this->trangThaiPhongRepository->create($input);

        Flash::success('Trang Thai Phong saved successfully.');

        return redirect(route('trangThaiPhongs.index'));
    }

    /**
     * Display the specified TrangThaiPhong.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trangThaiPhong = $this->trangThaiPhongRepository->findWithoutFail($id);

        if (empty($trangThaiPhong)) {
            Flash::error('Trang Thai Phong not found');

            return redirect(route('trangThaiPhongs.index'));
        }

        return view('trang_thai_phongs.show')->with('trangThaiPhong', $trangThaiPhong);
    }

    /**
     * Show the form for editing the specified TrangThaiPhong.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trangThaiPhong = $this->trangThaiPhongRepository->findWithoutFail($id);

        if (empty($trangThaiPhong)) {
            Flash::error('Trang Thai Phong not found');

            return redirect(route('trangThaiPhongs.index'));
        }

        return view('trang_thai_phongs.edit')->with('trangThaiPhong', $trangThaiPhong);
    }

    /**
     * Update the specified TrangThaiPhong in storage.
     *
     * @param  int              $id
     * @param UpdateTrangThaiPhongRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrangThaiPhongRequest $request)
    {
        $trangThaiPhong = $this->trangThaiPhongRepository->findWithoutFail($id);

        if (empty($trangThaiPhong)) {
            Flash::error('Trang Thai Phong not found');

            return redirect(route('trangThaiPhongs.index'));
        }

        $trangThaiPhong = $this->trangThaiPhongRepository->update($request->all(), $id);

        Flash::success('Trang Thai Phong updated successfully.');

        return redirect(route('trangThaiPhongs.index'));
    }

    /**
     * Remove the specified TrangThaiPhong from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trangThaiPhong = $this->trangThaiPhongRepository->findWithoutFail($id);

        if (empty($trangThaiPhong)) {
            Flash::error('Trang Thai Phong not found');

            return redirect(route('trangThaiPhongs.index'));
        }

        $this->trangThaiPhongRepository->delete($id);

        Flash::success('Trang Thai Phong deleted successfully.');

        return redirect(route('trangThaiPhongs.index'));
    }
}
