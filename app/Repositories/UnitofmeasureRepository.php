<?php

namespace App\Repositories;

use App\Models\Unitofmeasure;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UnitofmeasureRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:42 am UTC
 *
 * @method Unitofmeasure findWithoutFail($id, $columns = ['*'])
 * @method Unitofmeasure find($id, $columns = ['*'])
 * @method Unitofmeasure first($columns = ['*'])
*/
class UnitofmeasureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unitofmeasure::class;
    }
}
