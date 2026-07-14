<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = ['book', 'name', 'phone', 'tc', 'address', 'address_two'];

}
