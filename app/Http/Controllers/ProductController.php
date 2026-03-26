<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $valited=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required|integer',
            'image'=>'nullable|file|max:2048',
        ]);

        Product::create($valited);

        return redirect()->route('products.index')
        ->with('success', 'Продукт успешно создан');
    }
}
