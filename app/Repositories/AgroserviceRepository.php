<?php

namespace App\Repositories;

use App\Models\Agroservice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgroserviceRepository
 * @package App\Repositories
 * @version May 24, 2018, 10:47 am UTC
 *
 * @method Agroservice findWithoutFail($id, $columns = ['*'])
 * @method Agroservice find($id, $columns = ['*'])
 * @method Agroservice first($columns = ['*'])
*/
class AgroserviceRepository extends BaseRepository
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
        return Agroservice::class;
    }
}
