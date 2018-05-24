<?php

namespace App\Repositories;

use App\Models\Agroinput;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgroinputRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:44 am UTC
 *
 * @method Agroinput findWithoutFail($id, $columns = ['*'])
 * @method Agroinput find($id, $columns = ['*'])
 * @method Agroinput first($columns = ['*'])
*/
class AgroinputRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'unitofmeasure_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agroinput::class;
    }
}
