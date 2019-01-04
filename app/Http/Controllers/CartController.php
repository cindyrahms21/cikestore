<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use App\Model\ProductInCart;
use App\Model\Product;
use App\Model\BaseView;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products_in_cart = ProductInCart::all();
        return BaseView::client('shopping-cart',['products_in_cart'=>$products_in_cart]);
    }

    public function checkout(){
		$products = ProductInCart::all();
		$message = "";
		
		foreach($products as $p){
			$pd = Product::find($p->id_product);
			$message = $message.$pd->name." ".$pd->price." ".$p->quantity." ".$p->color." ".$p->size.", ";
		}
        ProductInCart::truncate();
        return redirect()->away("https://wa.me/6281331632369?text=".$message);
    }

    public function remove(ProductInCart $product_in_cart){
        $product_in_cart->delete();
        return redirect('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    public function add(Request $request, Product $product){
        $request["id_product"]=$product->id;
        ProductInCart::create($request->all());
        $product->stock -= $request['quantity'];
        $product->save();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
