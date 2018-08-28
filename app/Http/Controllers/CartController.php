<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

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

        if(null != $request->input('type')){
            $type = $request->input('type');

            if ($type == 'Kifla' || $type == '28cm' || $type == 'Limenka 0,33l') {
                $type_id = 1;
            }else if ($type == 'Tortilja' || $type == '32cm' || $type == '0,5l') {
                $type_id = 2;
            }else if ($type == 'Wrap' || $type == '1l') {
                $type_id = 3;
            }else if ($type == '1,5l') {
                $type_id = 4;
            }else if ($type == '2l') {
                $type_id = 5;
            }

            $price_id = 'price'.$type_id;
            if($type_id==1){
                $price = $product->price;
            }else{
                $price = $product->$price_id;
            }
        }else{
            $type = null;
            if(!is_null($product->price)){
                $price = $product->price;
            }else{
                $price = $product->price2;
            }
        }

        $sum = $price * $quantity;
        $note = $request->input('note');

        if(null != $request->input('additions')){
            $additions_array = $request->input('additions');
            $additions_object = (object)$additions_array;

        }else{
            $additions_object = null;
        }
        $item = new Cart();
        $item->product_id = $product_id;
        $item->product_name = $product->product_name;
        $item->type = $type;
        $item->price = $price;
        $item->quantity = $quantity;
        $item->sum = $sum;
        $item->note = $note;
        $item->additions = $additions_object;


        /*session()->forget('cart');*/
        $request->session()->push('cart.items', $item);
        $cart_qty = count(session()->get('cart.items'));
        $request->session()->put('cart.qty', $cart_qty);

        return redirect('cart');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
