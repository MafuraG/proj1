<?php

namespace App\Repositories;

use App\Models\Farmrole;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FarmroleRepository
 * @package App\Repositories
 * @version May 23, 2018, 11:29 pm UTC
 *
 * @method Farmrole findWithoutFail($id, $columns = ['*'])
 * @method Farmrole find($id, $columns = ['*'])
 * @method Farmrole first($columns = ['*'])
*/
class FarmroleRepository extends BaseRepository
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
        return Farmrole::class;
    }
}
