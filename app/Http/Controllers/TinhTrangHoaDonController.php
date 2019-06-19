<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTinhTrangHoaDonRequest;
use App\Http\Requests\UpdateTinhTrangHoaDonRequest;
use App\Repositories\TinhTrangHoaDonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\TinhTrangHoaDon;
use DB;

class TinhTrangHoaDonController extends AppBaseController
{
    /** @var  TinhTrangHoaDonRepository */
    private $tinhTrangHoaDonRepository;

    public function __construct(TinhTrangHoaDonRepository $tinhTrangHoaDonRepo)
    {
        $this->tinhTrangHoaDonRepository = $tinhTrangHoaDonRepo;
    }

    /**
     * Display a listing of the TinhTrangHoaDon.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $tinhTrangHoaDons = TinhTrangHoaDon::all();

        return view('tinh_trang_hoa_dons.index')
            ->with('tinhTrangHoaDons', $tinhTrangHoaDons);
    }

    /**
     * Show the form for creating a new TinhTrangHoaDon.
     *
     * @return Response
     */
    public function create()
    {
        return view('tinh_trang_hoa_dons.create');
    }

    /**
     * Store a newly created TinhTrangHoaDon in storage.
     *
     * @param CreateTinhTrangHoaDonRequest $request
     *
     * @return Response
     */
    public function store(CreateTinhTrangHoaDonRequest $request)
    {
        $input = $request->all();

        $tinhTrangHoaDon = $this->tinhTrangHoaDonRepository->create($input);

        Flash::success('Tinh Trang Hoa Don saved successfully.');

        return redirect(route('tinhTrangHoaDons.index'));
    }

    /**
     * Display the specified TinhTrangHoaDon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tinhTrangHoaDon = $this->tinhTrangHoaDonRepository->findWithoutFail($id);

        if (empty($tinhTrangHoaDon)) {
            Flash::error('Tinh Trang Hoa Don not found');

            return redirect(route('tinhTrangHoaDons.index'));
        }

        return view('tinh_trang_hoa_dons.show')->with('tinhTrangHoaDon', $tinhTrangHoaDon);
    }

    /**
     * Show the form for editing the specified TinhTrangHoaDon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tinhTrangHoaDon = $this->tinhTrangHoaDonRepository->findWithoutFail($id);

        if (empty($tinhTrangHoaDon)) {
            Flash::error('Tinh Trang Hoa Don not found');

            return redirect(route('tinhTrangHoaDons.index'));
        }

        return view('tinh_trang_hoa_dons.edit')->with('tinhTrangHoaDon', $tinhTrangHoaDon);
    }

    /**
     * Update the specified TinhTrangHoaDon in storage.
     *
     * @param  int              $id
     * @param UpdateTinhTrangHoaDonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTinhTrangHoaDonRequest $request)
    {
        $tinhTrangHoaDon = $this->tinhTrangHoaDonRepository->findWithoutFail($id);

        if (empty($tinhTrangHoaDon)) {
            Flash::error('Tinh Trang Hoa Don not found');

            return redirect(route('tinhTrangHoaDons.index'));
        }

        $tinhTrangHoaDon = $this->tinhTrangHoaDonRepository->update($request->all(), $id);

        Flash::success('Tinh Trang Hoa Don updated successfully.');

        return redirect(route('tinhTrangHoaDons.index'));
    }

    /**
     * Remove the specified TinhTrangHoaDon from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tinhTrangHoaDon = $this->tinhTrangHoaDonRepository->findWithoutFail($id);

        if (empty($tinhTrangHoaDon)) {
            Flash::error('Tinh Trang Hoa Don not found');

            return redirect(route('tinhTrangHoaDons.index'));
        }

        $this->tinhTrangHoaDonRepository->delete($id);

        Flash::success('Tinh Trang Hoa Don deleted successfully.');

        return redirect(route('tinhTrangHoaDons.index'));
    }
}
