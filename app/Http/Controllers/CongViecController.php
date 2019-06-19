<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCongViecRequest;
use App\Http\Requests\UpdateCongViecRequest;
use App\Repositories\CongViecRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\CongViec;
use DB;

class CongViecController extends AppBaseController
{
    /** @var  CongViecRepository */
    private $congViecRepository;

    public function __construct(CongViecRepository $congViecRepo)
    {
        $this->congViecRepository = $congViecRepo;
    }

    /**
     * Display a listing of the CongViec.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $congviec = CongViec::all();

        return view('cong_viecs.index')
            ->with('congViecs', $congviec);
    }

    /**
     * Show the form for creating a new CongViec.
     *
     * @return Response
     */
    public function create()
    {
        return view('cong_viecs.create');
    }

    /**
     * Store a newly created CongViec in storage.
     *
     * @param CreateCongViecRequest $request
     *
     * @return Response
     */
    public function store(CreateCongViecRequest $request)
    {
        $input = $request->all();

        $congViec = $this->congViecRepository->create($input);

        Flash::success('Cong Viec saved successfully.');

        return redirect(route('congViecs.index'));
    }

    /**
     * Display the specified CongViec.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $congViec = $this->congViecRepository->findWithoutFail($id);

        if (empty($congViec)) {
            Flash::error('Cong Viec not found');

            return redirect(route('congViecs.index'));
        }

        return view('cong_viecs.show')->with('congViec', $congViec);
    }

    /**
     * Show the form for editing the specified CongViec.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $congViec = $this->congViecRepository->findWithoutFail($id);

        if (empty($congViec)) {
            Flash::error('Cong Viec not found');

            return redirect(route('congViecs.index'));
        }

        return view('cong_viecs.edit')->with('congViec', $congViec);
    }

    /**
     * Update the specified CongViec in storage.
     *
     * @param  int              $id
     * @param UpdateCongViecRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCongViecRequest $request)
    {
        $congViec = $this->congViecRepository->findWithoutFail($id);

        if (empty($congViec)) {
            Flash::error('Cong Viec not found');

            return redirect(route('congViecs.index'));
        }

        $congViec = $this->congViecRepository->update($request->all(), $id);

        Flash::success('Cong Viec updated successfully.');

        return redirect(route('congViecs.index'));
    }

    /**
     * Remove the specified CongViec from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $congViec = $this->congViecRepository->findWithoutFail($id);

        if (empty($congViec)) {
            Flash::error('Cong Viec not found');

            return redirect(route('congViecs.index'));
        }

        $this->congViecRepository->delete($id);

        Flash::success('Cong Viec deleted successfully.');

        return redirect(route('congViecs.index'));
    }
}
