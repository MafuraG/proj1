<?php

namespace App\Repositories;

use App\Models\Orderservice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrderserviceRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:48 am UTC
 *
 * @method Orderservice findWithoutFail($id, $columns = ['*'])
 * @method Orderservice find($id, $columns = ['*'])
 * @method Orderservice first($columns = ['*'])
*/
class OrderserviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'task_id',
        'agroservice_id',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orderservice::class;
    }
}
