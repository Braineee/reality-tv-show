<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_firstname', 
        'user_lastname', 
        'user_othername', 
        'user_email', 
        'user_password', 
        'user_phone', 
        'role_uuid', 
        'country_uuid', 
        'state_uuid', 
        'city_uuid', 
        'user_address', 
        'user_postal_code'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The primary key.
     *
     * @var array
     */
    protected $primaryKey = 'user_uuid';

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) { $model->user_uuid = (string) Str::orderedUuid(); });
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function role() {
        return $this->belongsTo('App\Models\Role');
    }

    public function country() {
        return $this->belongsTo('App\Models\Country');
    }
}
