<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUnitofmeasureRequest;
use App\Http\Requests\UpdateUnitofmeasureRequest;
use App\Repositories\UnitofmeasureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UnitofmeasureController extends AppBaseController
{
    /** @var  UnitofmeasureRepository */
    private $unitofmeasureRepository;

    public function __construct(UnitofmeasureRepository $unitofmeasureRepo)
    {
        $this->unitofmeasureRepository = $unitofmeasureRepo;
    }

    /**
     * Display a listing of the Unitofmeasure.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->unitofmeasureRepository->pushCriteria(new RequestCriteria($request));
        $unitofmeasures = $this->unitofmeasureRepository->all();

        return view('unitofmeasures.index')
            ->with('unitofmeasures', $unitofmeasures);
    }

    /**
     * Show the form for creating a new Unitofmeasure.
     *
     * @return Response
     */
    public function create()
    {
        return view('unitofmeasures.create');
    }

    /**
     * Store a newly created Unitofmeasure in storage.
     *
     * @param CreateUnitofmeasureRequest $request
     *
     * @return Response
     */
    public function store(CreateUnitofmeasureRequest $request)
    {
        $input = $request->all();

        $unitofmeasure = $this->unitofmeasureRepository->create($input);

        Flash::success('Unitofmeasure saved successfully.');

        return redirect(route('unitofmeasures.index'));
    }

    /**
     * Display the specified Unitofmeasure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unitofmeasure = $this->unitofmeasureRepository->findWithoutFail($id);

        if (empty($unitofmeasure)) {
            Flash::error('Unitofmeasure not found');

            return redirect(route('unitofmeasures.index'));
        }

        return view('unitofmeasures.show')->with('unitofmeasure', $unitofmeasure);
    }

    /**
     * Show the form for editing the specified Unitofmeasure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unitofmeasure = $this->unitofmeasureRepository->findWithoutFail($id);

        if (empty($unitofmeasure)) {
            Flash::error('Unitofmeasure not found');

            return redirect(route('unitofmeasures.index'));
        }

        return view('unitofmeasures.edit')->with('unitofmeasure', $unitofmeasure);
    }

    /**
     * Update the specified Unitofmeasure in storage.
     *
     * @param  int              $id
     * @param UpdateUnitofmeasureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUnitofmeasureRequest $request)
    {
        $unitofmeasure = $this->unitofmeasureRepository->findWithoutFail($id);

        if (empty($unitofmeasure)) {
            Flash::error('Unitofmeasure not found');

            return redirect(route('unitofmeasures.index'));
        }

        $unitofmeasure = $this->unitofmeasureRepository->update($request->all(), $id);

        Flash::success('Unitofmeasure updated successfully.');

        return redirect(route('unitofmeasures.index'));
    }

    /**
     * Remove the specified Unitofmeasure from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unitofmeasure = $this->unitofmeasureRepository->findWithoutFail($id);

        if (empty($unitofmeasure)) {
            Flash::error('Unitofmeasure not found');

            return redirect(route('unitofmeasures.index'));
        }

        $this->unitofmeasureRepository->delete($id);

        Flash::success('Unitofmeasure deleted successfully.');

        return redirect(route('unitofmeasures.index'));
    }
}
