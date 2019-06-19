<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDichVuRequest;
use App\Http\Requests\UpdateDichVuRequest;
use App\Repositories\DichVuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\DichVu;
use DB;

class DichVuController extends AppBaseController
{
    /** @var  DichVuRepository */
    private $dichVuRepository;

    public function __construct(DichVuRepository $dichVuRepo)
    {
        $this->dichVuRepository = $dichVuRepo;
    }

    /**
     * Display a listing of the DichVu.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dichVuRepository->pushCriteria(new RequestCriteria($request));
        $dichVus = $this->dichVuRepository->all();

        return view('dich_vus.index')
            ->with('dichVus', $dichVus);
    }

    /**
     * Show the form for creating a new DichVu.
     *
     * @return Response
     */
    public function create()
    {
        return view('dich_vus.create');
    }

    /**
     * Store a newly created DichVu in storage.
     *
     * @param CreateDichVuRequest $request
     *
     * @return Response
     */
    public function store(CreateDichVuRequest $request)
    {
        $input = $request->all();

        $dichVu = $this->dichVuRepository->create($input);

        Flash::success('Dich Vu saved successfully.');

        return redirect(route('dichVus.index'));
    }

    /**
     * Display the specified DichVu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dichVu = $this->dichVuRepository->findWithoutFail($id);

        if (empty($dichVu)) {
            Flash::error('Dich Vu not found');

            return redirect(route('dichVus.index'));
        }

        return view('dich_vus.show')->with('dichVu', $dichVu);
    }

    /**
     * Show the form for editing the specified DichVu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dichVu = $this->dichVuRepository->findWithoutFail($id);

        if (empty($dichVu)) {
            Flash::error('Dich Vu not found');

            return redirect(route('dichVus.index'));
        }

        return view('dich_vus.edit')->with('dichVu', $dichVu);
    }

    /**
     * Update the specified DichVu in storage.
     *
     * @param  int              $id
     * @param UpdateDichVuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDichVuRequest $request)
    {
        $dichVu = $this->dichVuRepository->findWithoutFail($id);

        if (empty($dichVu)) {
            Flash::error('Dich Vu not found');

            return redirect(route('dichVus.index'));
        }

        $dichVu = $this->dichVuRepository->update($request->all(), $id);

        Flash::success('Dich Vu updated successfully.');

        return redirect(route('dichVus.index'));
    }

    /**
     * Remove the specified DichVu from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dichVu = $this->dichVuRepository->findWithoutFail($id);

        if (empty($dichVu)) {
            Flash::error('Dich Vu not found');

            return redirect(route('dichVus.index'));
        }

        $this->dichVuRepository->delete($id);

        Flash::success('Dich Vu deleted successfully.');

        return redirect(route('dichVus.index'));
    }
}
