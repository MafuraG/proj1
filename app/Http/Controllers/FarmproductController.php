<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFarmproductRequest;
use App\Http\Requests\UpdateFarmproductRequest;
use App\Repositories\FarmproductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FarmproductController extends AppBaseController
{
    /** @var  FarmproductRepository */
    private $farmproductRepository;

    public function __construct(FarmproductRepository $farmproductRepo)
    {
        $this->farmproductRepository = $farmproductRepo;
    }

    /**
     * Display a listing of the Farmproduct.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->farmproductRepository->pushCriteria(new RequestCriteria($request));
        $farmproducts = $this->farmproductRepository->all();

        return view('farmproducts.index')
            ->with('farmproducts', $farmproducts);
    }

    /**
     * Show the form for creating a new Farmproduct.
     *
     * @return Response
     */
    public function create()
    {
        return view('farmproducts.create');
    }

    /**
     * Store a newly created Farmproduct in storage.
     *
     * @param CreateFarmproductRequest $request
     *
     * @return Response
     */
    public function store(CreateFarmproductRequest $request)
    {
        $input = $request->all();

        $farmproduct = $this->farmproductRepository->create($input);

        Flash::success('Farmproduct saved successfully.');

        return redirect(route('farmproducts.index'));
    }

    /**
     * Display the specified Farmproduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $farmproduct = $this->farmproductRepository->findWithoutFail($id);

        if (empty($farmproduct)) {
            Flash::error('Farmproduct not found');

            return redirect(route('farmproducts.index'));
        }

        return view('farmproducts.show')->with('farmproduct', $farmproduct);
    }

    /**
     * Show the form for editing the specified Farmproduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $farmproduct = $this->farmproductRepository->findWithoutFail($id);

        if (empty($farmproduct)) {
            Flash::error('Farmproduct not found');

            return redirect(route('farmproducts.index'));
        }

        return view('farmproducts.edit')->with('farmproduct', $farmproduct);
    }

    /**
     * Update the specified Farmproduct in storage.
     *
     * @param  int              $id
     * @param UpdateFarmproductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFarmproductRequest $request)
    {
        $farmproduct = $this->farmproductRepository->findWithoutFail($id);

        if (empty($farmproduct)) {
            Flash::error('Farmproduct not found');

            return redirect(route('farmproducts.index'));
        }

        $farmproduct = $this->farmproductRepository->update($request->all(), $id);

        Flash::success('Farmproduct updated successfully.');

        return redirect(route('farmproducts.index'));
    }

    /**
     * Remove the specified Farmproduct from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $farmproduct = $this->farmproductRepository->findWithoutFail($id);

        if (empty($farmproduct)) {
            Flash::error('Farmproduct not found');

            return redirect(route('farmproducts.index'));
        }

        $this->farmproductRepository->delete($id);

        Flash::success('Farmproduct deleted successfully.');

        return redirect(route('farmproducts.index'));
    }
}
