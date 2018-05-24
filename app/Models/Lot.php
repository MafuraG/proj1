<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lot
 * @package App\Models
 * @version May 24, 2018, 10:19 am UTC
 *
 * @property \App\Models\Farm farm
 * @property \App\Models\Product product
 * @property \Illuminate\Database\Eloquent\Collection Task
 * @property \Illuminate\Database\Eloquent\Collection Farmsale
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property string name
 * @property string detail
 * @property boolean active
 * @property integer farm_id
 * @property integer product_id
 */
class Lot extends Model
{
    use SoftDeletes;

    public $table = 'lots';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'detail',
        'active',
        'farm_id',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'detail' => 'string',
        'active' => 'boolean',
        'farm_id' => 'integer',
        'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function farm()
    {
        return $this->belongsTo(\App\Models\Farm::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tasks()
    {
        return $this->hasMany(\App\Models\Task::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function farmsales()
    {
        return $this->hasMany(\App\Models\Farmsale::class);
    }
}
