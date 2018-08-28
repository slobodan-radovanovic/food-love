<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Ingredient;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with('Addition')->get();
        /*$products = Product::with('Ingredient')->get();*/



        $data = [
            'categories'  => $categories,
            /*'products' => $products,*/
        ];

        return view('categories.index')->with($data);
    }

    public function show($id)
    {
        $category =  Category::find($id);
        return view('categories.show')->with('category', $category);
    }
}
