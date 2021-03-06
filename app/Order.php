<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'laundry', 'ironing', 'laundry_status', 'payment_status', 'pickup', 'delivery', 'notes'
    ];

}
