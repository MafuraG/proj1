<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repositories\TaskRepository;
use App\Repositories\LotRepository;
use App\Repositories\FarmRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TaskController extends AppBaseController
{
    /** @var  TaskRepository */
    private $taskRepository;
    private $lotRepository;
    private $farmRepository;

    public function __construct(TaskRepository $taskRepo,
                                LotRepository $lotRepo,
                                FarmRepository $farmRepo)
    {
        $this->taskRepository = $taskRepo;
        $this->lotRepository = $lotRepo;
        $this->farmRepository = $farmRepo;
    }

    /**
     * Display a listing of the Task.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->taskRepository->pushCriteria(new RequestCriteria($request));
        $user = \Auth::user();
        //get farms belonging to given user
        $farm_ids = $this->farmRepository->model()
                        ::where('user_id',$user->id)
                        ->select('id')
                        ->get();        
        
       
        $lot_ids =$this->lotRepository->model()
                            ::whereIn('farm_id',$farm_ids)
                            ->select('id')
                            ->get();
        
        $tasks = $this->taskRepository->model()
                        ::whereIn('lot_id',$lot_ids)
                        ->get();
        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new Task.
     *
     * @return Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created Task in storage.
     *
     * @param CreateTaskRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskRequest $request)
    {
        $input = $request->all();

        $task = $this->taskRepository->create($input);

        Flash::success('Task saved successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified Task.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified Task.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $task = $this->taskRepository->findWithoutFail($id);        

        $lot = $this->lotRepository->model();
        $datas = $lot::where('farm_id',$task->lot->farm_id)
                    ->get();        
        $items = array();
        foreach ($datas as $data)
        {
            $items[$data->id] = $data->name;
        }


        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.edit')
                ->with('task', $task)
                ->with('userlots',$items);
    }

    /**
     * Update the specified Task in storage.
     *
     * @param  int              $id
     * @param UpdateTaskRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskRequest $request)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        $task = $this->taskRepository->update($request->all(), $id);

        Flash::success('Task updated successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified Task from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        $this->taskRepository->delete($id);

        Flash::success('Task deleted successfully.');

        return redirect(route('tasks.index'));
    }
}
