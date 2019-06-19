<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTangRequest;
use App\Http\Requests\UpdateTangRequest;
use App\Repositories\TangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tang;
use DB;
class TangController extends AppBaseController
{
    /** @var  TangRepository */
    private $tangRepository;

    public function __construct(TangRepository $tangRepo)
    {
        $this->tangRepository = $tangRepo;
    }

    /**
     * Display a listing of the Tang.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tangs = Tang::all();

        return view('tangs.index')
            ->with('tangs', $tangs);
    }

    /**
     * Show the form for creating a new Tang.
     *
     * @return Response
     */
    public function create()
    {
        return view('tangs.create');
    }

    /**
     * Store a newly created Tang in storage.
     *
     * @param CreateTangRequest $request
     *
     * @return Response
     */
    public function store(CreateTangRequest $request)
    {
        $input = $request->all();

        $tang = $this->tangRepository->create($input);

        Flash::success('Tang saved successfully.');

        return redirect(route('tangs.index'));
    }

    /**
     * Display the specified Tang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tang = $this->tangRepository->findWithoutFail($id);

        if (empty($tang)) {
            Flash::error('Tang not found');

            return redirect(route('tangs.index'));
        }

        return view('tangs.show')->with('tang', $tang);
    }

    /**
     * Show the form for editing the specified Tang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tang = $this->tangRepository->findWithoutFail($id);

        if (empty($tang)) {
            Flash::error('Tang not found');

            return redirect(route('tangs.index'));
        }

        return view('tangs.edit')->with('tang', $tang);
    }

    /**
     * Update the specified Tang in storage.
     *
     * @param  int              $id
     * @param UpdateTangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTangRequest $request)
    {
        $tang = $this->tangRepository->findWithoutFail($id);

        if (empty($tang)) {
            Flash::error('Tang not found');

            return redirect(route('tangs.index'));
        }

        $tang = $this->tangRepository->update($request->all(), $id);

        Flash::success('Tang updated successfully.');

        return redirect(route('tangs.index'));
    }

    /**
     * Remove the specified Tang from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tang = $this->tangRepository->findWithoutFail($id);

        if (empty($tang)) {
            Flash::error('Tang not found');

            return redirect(route('tangs.index'));
        }

        $this->tangRepository->delete($id);

        Flash::success('Tang deleted successfully.');

        return redirect(route('tangs.index'));
    }
}
