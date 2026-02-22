<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
   
        'amount',
        'name',
        'email_id',
        'address',
        'phonenumber',
        'program_id',
    ];



    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
