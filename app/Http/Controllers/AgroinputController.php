<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgroinputRequest;
use App\Http\Requests\UpdateAgroinputRequest;
use App\Repositories\AgroinputRepository;
use App\Repositories\UnitofmeasureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AgroinputController extends AppBaseController
{
    /** @var  AgroinputRepository */
    private $agroinputRepository;
    private $unitofmeasureRepository;

    public function __construct(AgroinputRepository $agroinputRepo,
                                UnitofmeasureRepository $unitofmeasureRepo)
    {
        $this->agroinputRepository = $agroinputRepo;
        $this->unitofmeasureRepository = $unitofmeasureRepo;
    }

    /**
     * Display a listing of the Agroinput.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->agroinputRepository->pushCriteria(new RequestCriteria($request));
        $agroinputs = $this->agroinputRepository->all();

        return view('agroinputs.index')
            ->with('agroinputs', $agroinputs);
    }

    /**
     * Show the form for creating a new Agroinput.
     *
     * @return Response
     */
    public function create()
    {
        return view('agroinputs.create');
    }

    /**
     * Store a newly created Agroinput in storage.
     *
     * @param CreateAgroinputRequest $request
     *
     * @return Response
     */
    public function store(CreateAgroinputRequest $request)
    {
        $input = $request->all();

        $agroinput = $this->agroinputRepository->create($input);

        Flash::success('Agroinput saved successfully.');

        return redirect(route('agroinputs.index'));
    }

    /**
     * Display the specified Agroinput.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agroinput = $this->agroinputRepository->findWithoutFail($id);

        if (empty($agroinput)) {
            Flash::error('Agroinput not found');

            return redirect(route('agroinputs.index'));
        }

        return view('agroinputs.show')->with('agroinput', $agroinput);
    }

    /**
     * Show the form for editing the specified Agroinput.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agroinput = $this->agroinputRepository->findWithoutFail($id);        

        $items = $this->getdropdownData($this->unitofmeasureRepository->model());

        return view('agroinputs.edit')
                    ->with('units', $items)
                    ->with('agroinput', $agroinput);
    }

    /**
     * Update the specified Agroinput in storage.
     *
     * @param  int              $id
     * @param UpdateAgroinputRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgroinputRequest $request)
    {
        $agroinput = $this->agroinputRepository->findWithoutFail($id);

        if (empty($agroinput)) {
            Flash::error('Agroinput not found');

            return redirect(route('agroinputs.index'));
        }

        $agroinput = $this->agroinputRepository->update($request->all(), $id);

        Flash::success('Agroinput updated successfully.');

        return redirect(route('agroinputs.index'));
    }

    /**
     * Remove the specified Agroinput from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agroinput = $this->agroinputRepository->findWithoutFail($id);

        if (empty($agroinput)) {
            Flash::error('Agroinput not found');

            return redirect(route('agroinputs.index'));
        }

        $this->agroinputRepository->delete($id);

        Flash::success('Agroinput deleted successfully.');

        return redirect(route('agroinputs.index'));
    }
}
