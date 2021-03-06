<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderinputRequest;
use App\Http\Requests\UpdateOrderinputRequest;
use App\Repositories\OrderinputRepository;
use App\Repositories\LotRepository;
use App\Repositories\FarmRepository;
use App\Repositories\TaskRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderinputController extends AppBaseController
{
    /** @var  OrderinputRepository */
    private $orderinputRepository;
    private $lotRepository;
    private $farmRepository;
    private $taskRepository;

    public function __construct(OrderinputRepository $orderinputRepo,
                                LotRepository $lotRepo,
                                FarmRepository $farmRepo,
                                TaskRepository $taskRepo)
    {
        $this->orderinputRepository = $orderinputRepo;
        $this->lotRepository = $lotRepo;
        $this->farmRepository = $farmRepo;
        $this->taskRepository = $taskRepo;
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
        
        $user = \Auth::user();
        //get farms belonging to given user
        $farm_ids = $this->farmRepository->model()
                        ::where('user_id',$user->id)
                        ->select('id')
                        ->get();
        //get lots belonging to that user
        $lot_ids = $this->lotRepository->model()
                    ::whereIn('farm_id',$farm_ids)
                    ->select('id')
                    ->get();
        //get tasks belonging to given user
        $task_ids = $this->taskRepository->model()
                    ::whereIn('lot_id',$lot_ids)
                    ->select('id')
                    ->get();
        $orderinputs = $this->orderinputRepository->model()
                        ::whereIn('task_id',$task_ids)
                        ->get();
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
