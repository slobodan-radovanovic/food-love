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

        return view('categories.index')->with('categories', $categories);
    }

    /*public function show($id)
    {
        $category =  Category::find($id);
        return view('categories.show')->with('category', $category);
    }*/
}
