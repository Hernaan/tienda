<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';//'orders' es el nombre de la tabla
    protected $fillable = ['subtotal', 'shipping', 'user_id'];
}
