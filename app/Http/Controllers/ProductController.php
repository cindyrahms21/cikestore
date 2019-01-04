<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Model\BaseView;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return BaseView::client('product',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return BaseView::client('admin.product-create',['product'=>new Product()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['id']!=null){
            return $this->update($request,Product::find($request['id']));
        }else{
            //
            $file = $request->file('image');
            $photoName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/assets/product/img'), $photoName);
            $request['img_path'] = '/assets/product/img/' . $photoName;

            Product::create($request->all());
            return redirect('product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return BaseView::client('product-detail',['product'=>$product]);
    }
	//ADMIN SHOW Product
	public function adminShow(Product $product)
    {
        //
        return BaseView::client('admin.product-detail',['product'=>$product]);
    }
	

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return BaseView::client('admin.product-create',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $file = $request->file('image');
        if($file!=null){
            $photoName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/assets/product/img'), $photoName);
            $request['img_path'] = '/assets/product/img/' . $photoName;
        }else{
            $request['img_path'] = $product->img_path;
        }
        $product->name          = $request['name'];
        $product->price         = $request['price'];
        $product->stock         = $request['stock'];
        $product->description   = $request['description'];
        $product->img_path      = $request['img_path'];
        $product->save();
        return redirect('product-detail/'.$product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('product');
    }
}
