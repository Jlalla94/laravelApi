<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index(){
        return view('product.index', ['products' => Product::get()]);
    }

    public function edit(int $id){

        return view('product.edit', ['product' => Product::where('id', $id)->first()]);
    }

    public function create(Request $request)
    {
        return view('product.create');
    }

    public function save(Request $request){
                $path = Storage::putFileAs(
            'products', $request->file('image'), $request->slug . '.' . $request->file('image')->getClientOriginalExtension()
        );

        Product::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'text' => $request->text,
            'expiration_date' => $request->expiration_date,
            'packaging_option' => $request->packaging_option,
            'image_name' => $path
        ]);

        return view('product.index', ['products' => Product::get()]);
    }

    public function update(Request $request, int $id){

        if ($request->hasFile('image')) {
            $path = Storage::putFileAs(
                'products', $request->file('image'), $request->slug . '.' . $request->file('image')->getClientOriginalExtension()
            );
            Product::where('id', $id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'text' => $request->text,
                'expiration_date' => $request->expiration_date,
                'packaging_option' => $request->packaging_option,
                'image_name' => $path
            ]);
        } else {
            Product::where('id', $id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'text' => $request->text,
                'expiration_date' => $request->expiration_date,
                'packaging_option' => $request->packaging_option,
            ]);
        }

        return view('product.index', ['products' => Product::get()]);
    }

    public function delete($id){

        $product = Product::where('id', $id)->first();
        Storage::delete($product->image_name);
        $product->delete();

        return view('product.index', ['products' => Product::get()]);

    }

    public function list(){

        return response()->json(['data' => Product::get()]);
    }

    public function one(string $slug){
        return response()->json(['data' => Product::where('slug', $slug)->get()]);
    }
}
