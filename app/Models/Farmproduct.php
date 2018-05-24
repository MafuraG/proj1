<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Farmproduct
 * @package App\Models
 * @version May 24, 2018, 4:51 pm UTC
 *
 * @property \App\Models\Lot lot
 * @property \App\Models\Product product
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property integer lot_id
 * @property integer product_id
 * @property integer quantity
 * @property string detail
 * @property string|\Carbon\Carbon harvest_plan
 * @property string|\Carbon\Carbon harvest_fact
 * @property string|\Carbon\Carbon expiry
 */
class Farmproduct extends Model
{
    use SoftDeletes;

    public $table = 'farmproducts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'lot_id',
        'product_id',
        'quantity',
        'detail',
        'harvest_plan',
        'harvest_fact',
        'expiry'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lot_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'detail' => 'string'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
