<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agroinput
 * @package App\Models
 * @version May 24, 2018, 10:44 am UTC
 *
 * @property \App\Models\Unitofmeasure unitofmeasure
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property \Illuminate\Database\Eloquent\Collection Orderinput
 * @property string name
 * @property integer unitofmeasure_id
 */
class Agroinput extends Model
{
    use SoftDeletes;

    public $table = 'agroinputs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'unitofmeasure_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'unitofmeasure_id' => 'integer'
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
    public function unitofmeasure()
    {
        return $this->belongsTo(\App\Models\Unitofmeasure::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderinputs()
    {
        return $this->hasMany(\App\Models\Orderinput::class);
    }
}
