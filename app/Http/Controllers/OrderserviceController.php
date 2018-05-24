<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderserviceRequest;
use App\Http\Requests\UpdateOrderserviceRequest;
use App\Repositories\OrderserviceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderserviceController extends AppBaseController
{
    /** @var  OrderserviceRepository */
    private $orderserviceRepository;

    public function __construct(OrderserviceRepository $orderserviceRepo)
    {
        $this->orderserviceRepository = $orderserviceRepo;
    }

    /**
     * Display a listing of the Orderservice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->orderserviceRepository->pushCriteria(new RequestCriteria($request));
        $orderservices = $this->orderserviceRepository->all();

        return view('orderservices.index')
            ->with('orderservices', $orderservices);
    }

    /**
     * Show the form for creating a new Orderservice.
     *
     * @return Response
     */
    public function create()
    {
        return view('orderservices.create');
    }

    /**
     * Store a newly created Orderservice in storage.
     *
     * @param CreateOrderserviceRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderserviceRequest $request)
    {
        $input = $request->all();

        $orderservice = $this->orderserviceRepository->create($input);

        Flash::success('Orderservice saved successfully.');

        return redirect(route('orderservices.index'));
    }

    /**
     * Display the specified Orderservice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderservice = $this->orderserviceRepository->findWithoutFail($id);

        if (empty($orderservice)) {
            Flash::error('Orderservice not found');

            return redirect(route('orderservices.index'));
        }

        return view('orderservices.show')->with('orderservice', $orderservice);
    }

    /**
     * Show the form for editing the specified Orderservice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderservice = $this->orderserviceRepository->findWithoutFail($id);

        if (empty($orderservice)) {
            Flash::error('Orderservice not found');

            return redirect(route('orderservices.index'));
        }

        return view('orderservices.edit')->with('orderservice', $orderservice);
    }

    /**
     * Update the specified Orderservice in storage.
     *
     * @param  int              $id
     * @param UpdateOrderserviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderserviceRequest $request)
    {
        $orderservice = $this->orderserviceRepository->findWithoutFail($id);

        if (empty($orderservice)) {
            Flash::error('Orderservice not found');

            return redirect(route('orderservices.index'));
        }

        $orderservice = $this->orderserviceRepository->update($request->all(), $id);

        Flash::success('Orderservice updated successfully.');

        return redirect(route('orderservices.index'));
    }

    /**
     * Remove the specified Orderservice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderservice = $this->orderserviceRepository->findWithoutFail($id);

        if (empty($orderservice)) {
            Flash::error('Orderservice not found');

            return redirect(route('orderservices.index'));
        }

        $this->orderserviceRepository->delete($id);

        Flash::success('Orderservice deleted successfully.');

        return redirect(route('orderservices.index'));
    }
}
