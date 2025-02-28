<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view ('products.index',['products' => $products]);
    }


    public function create(){
        return view ('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = product::create($data);

        return redirect(route('products.index'));
    }

    public function edit($id)
{
    $product = Product::findOrFail($id); // Ensure product exists
    return view('products.edit', compact('product'));
}


    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Validate input
    $request->validate([
        'name' => 'required',
        'qty' => 'required|integer',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    // Update product
    $product->update($request->all());

    return redirect()->route('products.index')->with('success', 'Product updated successfully!');
}

public function destroy($id)
{
    dd("Delete function called with ID: " . $id); // This will stop execution and display the ID

    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
}





}