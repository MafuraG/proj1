<?php

namespace App\Repositories;

use App\Models\Farmsale;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FarmsaleRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:22 am UTC
 *
 * @method Farmsale findWithoutFail($id, $columns = ['*'])
 * @method Farmsale find($id, $columns = ['*'])
 * @method Farmsale first($columns = ['*'])
*/
class FarmsaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lot_id',
        'price',
        'quantity'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Farmsale::class;
    }
}
