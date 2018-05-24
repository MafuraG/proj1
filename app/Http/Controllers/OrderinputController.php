<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderinputRequest;
use App\Http\Requests\UpdateOrderinputRequest;
use App\Repositories\OrderinputRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderinputController extends AppBaseController
{
    /** @var  OrderinputRepository */
    private $orderinputRepository;

    public function __construct(OrderinputRepository $orderinputRepo)
    {
        $this->orderinputRepository = $orderinputRepo;
    }

    /**
     * Display a listing of the Orderinput.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->orderinputRepository->pushCriteria(new RequestCriteria($request));
        $orderinputs = $this->orderinputRepository->all();

        return view('orderinputs.index')
            ->with('orderinputs', $orderinputs);
    }

    /**
     * Show the form for creating a new Orderinput.
     *
     * @return Response
     */
    public function create()
    {
        return view('orderinputs.create');
    }

    /**
     * Store a newly created Orderinput in storage.
     *
     * @param CreateOrderinputRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderinputRequest $request)
    {
        $input = $request->all();

        $orderinput = $this->orderinputRepository->create($input);

        Flash::success('Orderinput saved successfully.');

        return redirect(route('orderinputs.index'));
    }

    /**
     * Display the specified Orderinput.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderinput = $this->orderinputRepository->findWithoutFail($id);

        if (empty($orderinput)) {
            Flash::error('Orderinput not found');

            return redirect(route('orderinputs.index'));
        }

        return view('orderinputs.show')->with('orderinput', $orderinput);
    }

    /**
     * Show the form for editing the specified Orderinput.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderinput = $this->orderinputRepository->findWithoutFail($id);

        if (empty($orderinput)) {
            Flash::error('Orderinput not found');

            return redirect(route('orderinputs.index'));
        }

        return view('orderinputs.edit')->with('orderinput', $orderinput);
    }

    /**
     * Update the specified Orderinput in storage.
     *
     * @param  int              $id
     * @param UpdateOrderinputRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderinputRequest $request)
    {
        $orderinput = $this->orderinputRepository->findWithoutFail($id);

        if (empty($orderinput)) {
            Flash::error('Orderinput not found');

            return redirect(route('orderinputs.index'));
        }

        $orderinput = $this->orderinputRepository->update($request->all(), $id);

        Flash::success('Orderinput updated successfully.');

        return redirect(route('orderinputs.index'));
    }

    /**
     * Remove the specified Orderinput from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderinput = $this->orderinputRepository->findWithoutFail($id);

        if (empty($orderinput)) {
            Flash::error('Orderinput not found');

            return redirect(route('orderinputs.index'));
        }

        $this->orderinputRepository->delete($id);

        Flash::success('Orderinput deleted successfully.');

        return redirect(route('orderinputs.index'));
    }
}
