<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::with('author','country')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(){
        $authors = Author::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        return view('products.create', compact('authors', 'countries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required|numeric',
            'image'=>['nullable','image','mimes:jpeg, png, jpg, gif','max:2048'],
            'author_id'=> 'required|exists:authors,id',
            'country_id'=> 'required|exists:countries,id'
        ]);

        if($request->hasFile('image')){
            $validated['image']=$request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('products.index')
        ->with('success', 'Продукт успешно создан');
    }


    public function edit(Product $product){
        $authors = Author::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        return view('products.edit', compact('product', 'authors', 'countries'));
    }

    public function update(Product $product, Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required|numeric',
            'image'=>['nullable','image','mimes:jpeg, png, jpg, gif','max:2048'],
            'author_id'=> 'required|exists:authors,id',
            'country_id'=> 'required|exists:countries,id'
        ]);

        if($request->hasFile('image')){
            $validated['image']= $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Продукт успешно обновлен!');
    }

    public function destroy(Product $product){
        
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Продукт успешно удален!');
    }

    
}
