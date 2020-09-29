<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class ProductController extends Controller
{

    public function index(){
        return view('product.index', ['products' => Product::get()]);
    }

    public function edit(int $id){

        return view('product.edit', ['product' => Product::where('id', $id)->first()]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function save(Request $Request){
        return 200;
    }

    public function delete($id){

        $product = Product::where('id', $id)->first();

        return 200;
    }

    public function list(){

        return response()->json(['data' => Product::get()]);
    }

    public function one(string $slug){
        return response()->json(['data' => Product::where('slug', $slug)->get()]);
    }
}
