<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Task
 * @package App\Models
 * @version May 24, 2018, 10:21 am UTC
 *
 * @property \App\Models\Lot lot
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection Orderservice
 * @property \Illuminate\Database\Eloquent\Collection Orderinput
 * @property string name
 * @property string detail
 * @property integer lot_id
 */
class Task extends Model
{
    use SoftDeletes;

    public $table = 'tasks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'detail',
        'lot_id'
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
        'lot_id' => 'integer'
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
    public function lot()
    {
        return $this->belongsTo(\App\Models\Lot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderservices()
    {
        return $this->hasMany(\App\Models\Orderservice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderinputs()
    {
        return $this->hasMany(\App\Models\Orderinput::class);
    }
}
