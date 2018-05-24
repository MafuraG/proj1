<?php

namespace App\Repositories;

use App\Models\Productype;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductypeRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:41 am UTC
 *
 * @method Productype findWithoutFail($id, $columns = ['*'])
 * @method Productype find($id, $columns = ['*'])
 * @method Productype first($columns = ['*'])
*/
class ProductypeRepository extends BaseRepository
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
        return Productype::class;
    }
}
