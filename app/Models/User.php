<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 * @version May 23, 2018, 11:24 pm UTC
 *
 * @property \App\Models\Farmrole farmrole
 * @property \Illuminate\Database\Eloquent\Collection Farm
 * @property \Illuminate\Database\Eloquent\Collection lots
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection Wallet
 * @property \Illuminate\Database\Eloquent\Collection orderservices
 * @property \Illuminate\Database\Eloquent\Collection orderinputs
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 * @property integer farmrole_id
 */
class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',        
        'farmrole_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'farmrole_id' => 'integer'
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
    public function farmrole()
    {
        return $this->belongsTo(\App\Models\Farmrole::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function farms()
    {
        return $this->hasMany(\App\Models\Farm::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function wallets()
    {
        return $this->hasMany(\App\Models\Wallet::class);
    }
}
