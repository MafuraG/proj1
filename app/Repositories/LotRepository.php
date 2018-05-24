<?php

namespace App\Repositories;

use App\Models\Lot;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LotRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:19 am UTC
 *
 * @method Lot findWithoutFail($id, $columns = ['*'])
 * @method Lot find($id, $columns = ['*'])
 * @method Lot first($columns = ['*'])
*/
class LotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'detail',
        'active',
        'farm_id',
        'product_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lot::class;
    }
}
