<?php

namespace App\Repositories;

use App\Models\Farm;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FarmRepository
 * @package App\Repositories
 * @version May 24, 2018, 9:37 am UTC
 *
 * @method Farm findWithoutFail($id, $columns = ['*'])
 * @method Farm find($id, $columns = ['*'])
 * @method Farm first($columns = ['*'])
*/
class FarmRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Farm::class;
    }
}
