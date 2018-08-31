<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Type;
use Illuminate\Support\Facades\Session;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = session()->get('cart.items');

        /*dd($items);*/

        return view('pages.cart')->with('items', $items);
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
        $product_id = $request->input('product_id');
        $quantity = (int)$request->input('quantity');
        $product = Product::find($product_id);

        if($request->input('type') == null){
            $type_name = null;
            $price = $product->price;
        }else{
            $type_id = $request->input('type');
            $type = Type::find($type_id);
            $type_name = $type->type_name;
            $type_price = $type->price;
            $price = $product->$type_price;
        }

        if($request->input('additions') == null){
            $additions = null;
        }else{
            $additions = $request->input('additions');
            foreach($additions as $adition){
                if($adition->addition_price != null){
                    $price += $adition->addition_price;
                }

            }
        }

        $sum = $price * $quantity;
        $note = $request->input('note');


        $item = new Cart();
        $item->product_id = $product_id;
        $item->product_name = $product->product_name;
        $item->type = $type_name;
        $item->price = $price;
        $item->quantity = $quantity;
        $item->sum = $sum;
        $item->note = $note;
        $item->additions = $additions;

        Session::push('cart.items', $item);
        if(Session::has('cart.qty')){
            $old_cart_qty = Session::get('cart.qty');
        }else{
            $old_cart_qty = 0;
        }
        $new_cart_qty = $old_cart_qty + $quantity;
        Session::put('cart.qty', $new_cart_qty);

        return redirect('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('cart');
        return redirect('cart');
    }
}
