<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unitofmeasure
 * @package App\Models
 * @version May 24, 2018, 10:42 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection Product
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property \Illuminate\Database\Eloquent\Collection Agroinput
 * @property string name
 */
class Unitofmeasure extends Model
{
    use SoftDeletes;

    public $table = 'unitofmeasures';
    
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
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function agroinputs()
    {
        return $this->hasMany(\App\Models\Agroinput::class);
    }
}
