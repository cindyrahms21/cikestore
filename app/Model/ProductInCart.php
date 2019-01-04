<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductInCart extends Model
{
    //
    protected $fillable = ['id_cart','id_product','quantity','size','color'];
}
