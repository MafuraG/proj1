<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agroservice
 * @package App\Models
 * @version May 24, 2018, 10:47 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection Orderservice
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property string name
 */
class Agroservice extends Model
{
    use SoftDeletes;

    public $table = 'agroservices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderservices()
    {
        return $this->hasMany(\App\Models\Orderservice::class);
    }
}
