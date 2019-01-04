<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Product;
use App\Model\Cart;
use App\Model\BaseView;

class HomeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::take(10)->get();
        return BaseView::client('home',[
            'products'=>$products
        ]);
    }
	
	public function admin()
    {
        $products = Product::take(10)->get();
        return BaseView::client('admin.admin_home',[
            'products'=>$products
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    public function about(){
        return BaseView::client('about',null);
    }

    public function contact(){
        return BaseView::client('contact',null);
    }
}
