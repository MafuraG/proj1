<?php

namespace App\Repositories;

use App\Models\Farmproduct;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FarmproductRepository
 * @package App\Repositories
 * @version May 24, 2018, 4:51 pm UTC
 *
 * @method Farmproduct findWithoutFail($id, $columns = ['*'])
 * @method Farmproduct find($id, $columns = ['*'])
 * @method Farmproduct first($columns = ['*'])
*/
class FarmproductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lot_id',
        'product_id',
        'quantity',
        'detail',
        'harvest_plan',
        'harvest_fact',
        'expiry'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Farmproduct::class;
    }
}
