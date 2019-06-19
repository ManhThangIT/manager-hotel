<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBangGiaRequest;
use App\Http\Requests\UpdateBangGiaRequest;
use App\Repositories\BangGiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\BangGia;
use DB;

class BangGiaController extends AppBaseController
{
    /** @var  BangGiaRepository */
    private $bangGiaRepository;

    public function __construct(BangGiaRepository $bangGiaRepo)
    {
        $this->bangGiaRepository = $bangGiaRepo;
    }

    /**
     * Display a listing of the BangGia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $bangGias = BangGia::all();

        return view('bang_gias.index')
            ->with('bangGias', $bangGias);
    }

    /**
     * Show the form for creating a new BangGia.
     *
     * @return Response
     */
    public function create()
    {
        return view('bang_gias.create');
    }

    /**
     * Store a newly created BangGia in storage.
     *
     * @param CreateBangGiaRequest $request
     *
     * @return Response
     */
    public function store(CreateBangGiaRequest $request)
    {
        $input = $request->all();

        $bangGia = $this->bangGiaRepository->create($input);

        Flash::success('Bang Gia saved successfully.');

        return redirect(route('bangGias.index'));
    }

    /**
     * Display the specified BangGia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bangGia = $this->bangGiaRepository->findWithoutFail($id);

        if (empty($bangGia)) {
            Flash::error('Bang Gia not found');

            return redirect(route('bangGias.index'));
        }

        return view('bang_gias.show')->with('bangGia', $bangGia);
    }

    /**
     * Show the form for editing the specified BangGia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bangGia = $this->bangGiaRepository->findWithoutFail($id);

        if (empty($bangGia)) {
            Flash::error('Bang Gia not found');

            return redirect(route('bangGias.index'));
        }

        return view('bang_gias.edit')->with('bangGia', $bangGia);
    }

    /**
     * Update the specified BangGia in storage.
     *
     * @param  int              $id
     * @param UpdateBangGiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBangGiaRequest $request)
    {
        $bangGia = $this->bangGiaRepository->findWithoutFail($id);

        if (empty($bangGia)) {
            Flash::error('Bang Gia not found');

            return redirect(route('bangGias.index'));
        }

        $bangGia = $this->bangGiaRepository->update($request->all(), $id);

        Flash::success('Bang Gia updated successfully.');

        return redirect(route('bangGias.index'));
    }

    /**
     * Remove the specified BangGia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bangGia = $this->bangGiaRepository->findWithoutFail($id);

        if (empty($bangGia)) {
            Flash::error('Bang Gia not found');

            return redirect(route('bangGias.index'));
        }

        $this->bangGiaRepository->delete($id);

        Flash::success('Bang Gia deleted successfully.');

        return redirect(route('bangGias.index'));
    }
}
