<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Orderinput
 * @package App\Models
 * @version May 24, 2018, 10:46 am UTC
 *
 * @property \App\Models\Task task
 * @property \App\Models\Agroinput agroinput
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property string name
 * @property integer task_id
 * @property integer agroinput_id
 * @property bigInteger price
 * @property integer quantity
 */
class Orderinput extends Model
{
    use SoftDeletes;

    public $table = 'orderinputs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'task_id',
        'agroinput_id',
        'price',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'task_id' => 'integer',
        'agroinput_id' => 'integer',
        'quantity' => 'integer'
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
    public function task()
    {
        return $this->belongsTo(\App\Models\Task::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function agroinput()
    {
        return $this->belongsTo(\App\Models\Agroinput::class);
    }
}
