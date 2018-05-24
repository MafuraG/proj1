<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFarmroleRequest;
use App\Http\Requests\UpdateFarmroleRequest;
use App\Repositories\FarmroleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FarmroleController extends AppBaseController
{
    /** @var  FarmroleRepository */
    private $farmroleRepository;

    public function __construct(FarmroleRepository $farmroleRepo)
    {
        $this->farmroleRepository = $farmroleRepo;
    }

    /**
     * Display a listing of the Farmrole.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->farmroleRepository->pushCriteria(new RequestCriteria($request));
        $farmroles = $this->farmroleRepository->all();

        return view('farmroles.index')
            ->with('farmroles', $farmroles);
    }

    /**
     * Show the form for creating a new Farmrole.
     *
     * @return Response
     */
    public function create()
    {
        return view('farmroles.create');
    }

    /**
     * Store a newly created Farmrole in storage.
     *
     * @param CreateFarmroleRequest $request
     *
     * @return Response
     */
    public function store(CreateFarmroleRequest $request)
    {
        $input = $request->all();

        $farmrole = $this->farmroleRepository->create($input);

        Flash::success('Farmrole saved successfully.');

        return redirect(route('farmroles.index'));
    }

    /**
     * Display the specified Farmrole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $farmrole = $this->farmroleRepository->findWithoutFail($id);

        if (empty($farmrole)) {
            Flash::error('Farmrole not found');

            return redirect(route('farmroles.index'));
        }

        return view('farmroles.show')->with('farmrole', $farmrole);
    }

    /**
     * Show the form for editing the specified Farmrole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $farmrole = $this->farmroleRepository->findWithoutFail($id);

        if (empty($farmrole)) {
            Flash::error('Farmrole not found');

            return redirect(route('farmroles.index'));
        }

        return view('farmroles.edit')->with('farmrole', $farmrole);
    }

    /**
     * Update the specified Farmrole in storage.
     *
     * @param  int              $id
     * @param UpdateFarmroleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFarmroleRequest $request)
    {
        $farmrole = $this->farmroleRepository->findWithoutFail($id);

        if (empty($farmrole)) {
            Flash::error('Farmrole not found');

            return redirect(route('farmroles.index'));
        }

        $farmrole = $this->farmroleRepository->update($request->all(), $id);

        Flash::success('Farmrole updated successfully.');

        return redirect(route('farmroles.index'));
    }

    /**
     * Remove the specified Farmrole from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $farmrole = $this->farmroleRepository->findWithoutFail($id);

        if (empty($farmrole)) {
            Flash::error('Farmrole not found');

            return redirect(route('farmroles.index'));
        }

        $this->farmroleRepository->delete($id);

        Flash::success('Farmrole deleted successfully.');

        return redirect(route('farmroles.index'));
    }
}
