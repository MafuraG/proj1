<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFarmsaleRequest;
use App\Http\Requests\UpdateFarmsaleRequest;
use App\Repositories\FarmsaleRepository;
use App\Repositories\LotRepository;
use App\Repositories\FarmRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FarmsaleController extends AppBaseController
{
    /** @var  FarmsaleRepository */
    private $farmsaleRepository;
    private $lotRepository;
    private $farmRepository;

    public function __construct(FarmsaleRepository $farmsaleRepo,
                                LotRepository $lotRepo,
                                FarmRepository $farmRepo)
    {
        $this->farmsaleRepository = $farmsaleRepo;
        $this->lotRepository = $lotRepo;
        $this->farmRepository = $farmRepo;
    }

    /**
     * Display a listing of the Farmsale.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->farmsaleRepository->pushCriteria(new RequestCriteria($request));
        $farmsales = $this->farmsaleRepository->model();

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
        //get farm sales for this farmer
        $farmsales = $farmsales 
                    ::whereIn('lot_id',$lot_ids)
                    ->get();
                    
        return view('farmsales.index')
            ->with('farmsales', $farmsales);
    }

    /**
     * Show the form for creating a new Farmsale.
     *
     * @return Response
     */
    public function create()
    {
        return view('farmsales.create');
    }

    /**
     * Store a newly created Farmsale in storage.
     *
     * @param CreateFarmsaleRequest $request
     *
     * @return Response
     */
    public function store(CreateFarmsaleRequest $request)
    {
        $input = $request->all();

        $farmsale = $this->farmsaleRepository->create($input);

        Flash::success('Farmsale saved successfully.');

        return redirect(route('farmsales.index'));
    }

    /**
     * Display the specified Farmsale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $farmsale = $this->farmsaleRepository->findWithoutFail($id);

        if (empty($farmsale)) {
            Flash::error('Farmsale not found');

            return redirect(route('farmsales.index'));
        }

        return view('farmsales.show')->with('farmsale', $farmsale);
    }

    /**
     * Show the form for editing the specified Farmsale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $farmsale = $this->farmsaleRepository->findWithoutFail($id);

        if (empty($farmsale)) {
            Flash::error('Farmsale not found');

            return redirect(route('farmsales.index'));
        }

        return view('farmsales.edit')->with('farmsale', $farmsale);
    }

    /**
     * Update the specified Farmsale in storage.
     *
     * @param  int              $id
     * @param UpdateFarmsaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFarmsaleRequest $request)
    {
        $farmsale = $this->farmsaleRepository->findWithoutFail($id);

        if (empty($farmsale)) {
            Flash::error('Farmsale not found');

            return redirect(route('farmsales.index'));
        }

        $farmsale = $this->farmsaleRepository->update($request->all(), $id);

        Flash::success('Farmsale updated successfully.');

        return redirect(route('farmsales.index'));
    }

    /**
     * Remove the specified Farmsale from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $farmsale = $this->farmsaleRepository->findWithoutFail($id);

        if (empty($farmsale)) {
            Flash::error('Farmsale not found');

            return redirect(route('farmsales.index'));
        }

        $this->farmsaleRepository->delete($id);

        Flash::success('Farmsale deleted successfully.');

        return redirect(route('farmsales.index'));
    }
}
