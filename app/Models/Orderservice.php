<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Orderservice
 * @package App\Models
 * @version May 24, 2018, 10:48 am UTC
 *
 * @property \App\Models\Task task
 * @property \App\Models\Agroservice agroservice
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property string name
 * @property integer task_id
 * @property integer agroservice_id
 * @property bigInteger price
 */
class Orderservice extends Model
{
    use SoftDeletes;

    public $table = 'orderservices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'task_id',
        'agroservice_id',
        'price'
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
        'agroservice_id' => 'integer'
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
    public function agroservice()
    {
        return $this->belongsTo(\App\Models\Agroservice::class);
    }
}
