<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgroserviceRequest;
use App\Http\Requests\UpdateAgroserviceRequest;
use App\Repositories\AgroserviceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AgroserviceController extends AppBaseController
{
    /** @var  AgroserviceRepository */
    private $agroserviceRepository;

    public function __construct(AgroserviceRepository $agroserviceRepo)
    {
        $this->agroserviceRepository = $agroserviceRepo;
    }

    /**
     * Display a listing of the Agroservice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->agroserviceRepository->pushCriteria(new RequestCriteria($request));
        $agroservices = $this->agroserviceRepository->all();

        return view('agroservices.index')
            ->with('agroservices', $agroservices);
    }

    /**
     * Show the form for creating a new Agroservice.
     *
     * @return Response
     */
    public function create()
    {
        return view('agroservices.create');
    }

    /**
     * Store a newly created Agroservice in storage.
     *
     * @param CreateAgroserviceRequest $request
     *
     * @return Response
     */
    public function store(CreateAgroserviceRequest $request)
    {
        $input = $request->all();

        $agroservice = $this->agroserviceRepository->create($input);

        Flash::success('Agroservice saved successfully.');

        return redirect(route('agroservices.index'));
    }

    /**
     * Display the specified Agroservice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agroservice = $this->agroserviceRepository->findWithoutFail($id);

        if (empty($agroservice)) {
            Flash::error('Agroservice not found');

            return redirect(route('agroservices.index'));
        }

        return view('agroservices.show')->with('agroservice', $agroservice);
    }

    /**
     * Show the form for editing the specified Agroservice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agroservice = $this->agroserviceRepository->findWithoutFail($id);

        if (empty($agroservice)) {
            Flash::error('Agroservice not found');

            return redirect(route('agroservices.index'));
        }

        return view('agroservices.edit')->with('agroservice', $agroservice);
    }

    /**
     * Update the specified Agroservice in storage.
     *
     * @param  int              $id
     * @param UpdateAgroserviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgroserviceRequest $request)
    {
        $agroservice = $this->agroserviceRepository->findWithoutFail($id);

        if (empty($agroservice)) {
            Flash::error('Agroservice not found');

            return redirect(route('agroservices.index'));
        }

        $agroservice = $this->agroserviceRepository->update($request->all(), $id);

        Flash::success('Agroservice updated successfully.');

        return redirect(route('agroservices.index'));
    }

    /**
     * Remove the specified Agroservice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agroservice = $this->agroserviceRepository->findWithoutFail($id);

        if (empty($agroservice)) {
            Flash::error('Agroservice not found');

            return redirect(route('agroservices.index'));
        }

        $this->agroserviceRepository->delete($id);

        Flash::success('Agroservice deleted successfully.');

        return redirect(route('agroservices.index'));
    }
}
