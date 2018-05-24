<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version May 24, 2018, 10:21 am UTC
 *
 * @property \App\Models\Productype productype
 * @property \App\Models\Unitofmeasure unitofmeasure
 * @property \Illuminate\Database\Eloquent\Collection Lot
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property string name
 * @property integer productype_id
 * @property integer unitofmeasure_id
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'productype_id',
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
        'productype_id' => 'integer',
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
    public function productype()
    {
        return $this->belongsTo(\App\Models\Productype::class);
    }

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
    public function lots()
    {
        return $this->hasMany(\App\Models\Lot::class);
    }
}
