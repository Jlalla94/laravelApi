<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){
        return response()->json(['data' => Product::get()]);
    }

    public function edit(){
        return response()->json(['data' => Product::get()]);
    }

    public function create(){
        return response()->json(['data' => Product::get()]);
    }

    public function list(){
        return response()->json(['data' => Product::get()]);
    }

    public function one(string $slug){
        return response()->json(['data' => Product::where('slug', $slug)->get()]);
    }
}
