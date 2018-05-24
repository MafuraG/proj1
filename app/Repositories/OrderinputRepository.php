<?php

namespace App\Repositories;

use App\Models\Orderinput;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrderinputRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:46 am UTC
 *
 * @method Orderinput findWithoutFail($id, $columns = ['*'])
 * @method Orderinput find($id, $columns = ['*'])
 * @method Orderinput first($columns = ['*'])
*/
class OrderinputRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'task_id',
        'agroinput_id',
        'price',
        'quantity'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orderinput::class;
    }
}
