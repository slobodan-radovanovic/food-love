<?php

namespace App\Http\Controllers;


use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {
        //
    }

    public function addToCart(Request $request, $id ){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
    }

}