<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductypeRequest;
use App\Http\Requests\UpdateProductypeRequest;
use App\Repositories\ProductypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductypeController extends AppBaseController
{
    /** @var  ProductypeRepository */
    private $productypeRepository;

    public function __construct(ProductypeRepository $productypeRepo)
    {
        $this->productypeRepository = $productypeRepo;
    }

    /**
     * Display a listing of the Productype.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productypeRepository->pushCriteria(new RequestCriteria($request));
        $productypes = $this->productypeRepository->all();

        return view('productypes.index')
            ->with('productypes', $productypes);
    }

    /**
     * Show the form for creating a new Productype.
     *
     * @return Response
     */
    public function create()
    {
        return view('productypes.create');
    }

    /**
     * Store a newly created Productype in storage.
     *
     * @param CreateProductypeRequest $request
     *
     * @return Response
     */
    public function store(CreateProductypeRequest $request)
    {
        $input = $request->all();

        $productype = $this->productypeRepository->create($input);

        Flash::success('Productype saved successfully.');

        return redirect(route('productypes.index'));
    }

    /**
     * Display the specified Productype.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productype = $this->productypeRepository->findWithoutFail($id);

        if (empty($productype)) {
            Flash::error('Productype not found');

            return redirect(route('productypes.index'));
        }

        return view('productypes.show')->with('productype', $productype);
    }

    /**
     * Show the form for editing the specified Productype.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productype = $this->productypeRepository->findWithoutFail($id);

        if (empty($productype)) {
            Flash::error('Productype not found');

            return redirect(route('productypes.index'));
        }

        return view('productypes.edit')->with('productype', $productype);
    }

    /**
     * Update the specified Productype in storage.
     *
     * @param  int              $id
     * @param UpdateProductypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductypeRequest $request)
    {
        $productype = $this->productypeRepository->findWithoutFail($id);

        if (empty($productype)) {
            Flash::error('Productype not found');

            return redirect(route('productypes.index'));
        }

        $productype = $this->productypeRepository->update($request->all(), $id);

        Flash::success('Productype updated successfully.');

        return redirect(route('productypes.index'));
    }

    /**
     * Remove the specified Productype from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productype = $this->productypeRepository->findWithoutFail($id);

        if (empty($productype)) {
            Flash::error('Productype not found');

            return redirect(route('productypes.index'));
        }

        $this->productypeRepository->delete($id);

        Flash::success('Productype deleted successfully.');

        return redirect(route('productypes.index'));
    }
}
