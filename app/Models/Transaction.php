<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'user_uuid',
        'amount',
        'payment_description',
        'currency',
        'transaction_date',
        'status',
        'reference',
        'domain',
        'metadata',
        'custom_fields',
        'gateway_response',
        'message',
        'channel',
        'ip_address',
        'log',
        'authorization',
        'customer',
        'plan',
    ];

    /**
     * The primary key.
     *
     * @var array
     */
    protected $primaryKey = 'transaction_uuid';
    
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) { $model->transaction_uuid = (string) Str::orderedUuid(); });
    }
}
