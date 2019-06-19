<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKieuThueRequest;
use App\Http\Requests\UpdateKieuThueRequest;
use App\Repositories\KieuThueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\KieuThue;
use DB;

class KieuThueController extends AppBaseController
{
    /** @var  KieuThueRepository */
    private $kieuThueRepository;

    public function __construct(KieuThueRepository $kieuThueRepo)
    {
        $this->kieuThueRepository = $kieuThueRepo;
    }

    /**
     * Display a listing of the KieuThue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $kieuThues = KieuThue::all();

        return view('kieu_thues.index')
            ->with('kieuThues', $kieuThues);
    }

    /**
     * Show the form for creating a new KieuThue.
     *
     * @return Response
     */
    public function create()
    {
        return view('kieu_thues.create');
    }

    /**
     * Store a newly created KieuThue in storage.
     *
     * @param CreateKieuThueRequest $request
     *
     * @return Response
     */
    public function store(CreateKieuThueRequest $request)
    {
        $input = $request->all();

        $kieuThue = $this->kieuThueRepository->create($input);

        Flash::success('Kieu Thue saved successfully.');

        return redirect(route('kieuThues.index'));
    }

    /**
     * Display the specified KieuThue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kieuThue = $this->kieuThueRepository->findWithoutFail($id);

        if (empty($kieuThue)) {
            Flash::error('Kieu Thue not found');

            return redirect(route('kieuThues.index'));
        }

        return view('kieu_thues.show')->with('kieuThue', $kieuThue);
    }

    /**
     * Show the form for editing the specified KieuThue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kieuThue = $this->kieuThueRepository->findWithoutFail($id);

        if (empty($kieuThue)) {
            Flash::error('Kieu Thue not found');

            return redirect(route('kieuThues.index'));
        }

        return view('kieu_thues.edit')->with('kieuThue', $kieuThue);
    }

    /**
     * Update the specified KieuThue in storage.
     *
     * @param  int              $id
     * @param UpdateKieuThueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKieuThueRequest $request)
    {
        $kieuThue = $this->kieuThueRepository->findWithoutFail($id);

        if (empty($kieuThue)) {
            Flash::error('Kieu Thue not found');

            return redirect(route('kieuThues.index'));
        }

        $kieuThue = $this->kieuThueRepository->update($request->all(), $id);

        Flash::success('Kieu Thue updated successfully.');

        return redirect(route('kieuThues.index'));
    }

    /**
     * Remove the specified KieuThue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kieuThue = $this->kieuThueRepository->findWithoutFail($id);

        if (empty($kieuThue)) {
            Flash::error('Kieu Thue not found');

            return redirect(route('kieuThues.index'));
        }

        $this->kieuThueRepository->delete($id);

        Flash::success('Kieu Thue deleted successfully.');

        return redirect(route('kieuThues.index'));
    }
}
