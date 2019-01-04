<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\Model\ProductInCart;
use App\Model\Cart;
use Illuminate\View;

class BaseView extends Model
{
    //
    public static function client($view,$value){
        if($value==null)
            $value=array();

        $products_in_cart = ProductInCart::all();
        $total = 0;
        foreach($products_in_cart as $p){
            $product = Product::find($p->id_product);
            $total += ($product->price*$p->quantity);
        }
        $value['products_in_cart'] = $products_in_cart;
        $value['total'] = $total;
        return view($view,$value);
    }
}
