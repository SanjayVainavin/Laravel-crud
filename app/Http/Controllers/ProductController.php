<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products = DB::table('laravel')->paginate(5);
        $products = product::paginate(5);
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2 ',
            'description' => 'nullable'
        ]);

        $newProduct = product::create($data);
        return redirect(route('products.index'));
    }

    public function edit(product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function update(product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2 ',
            'description' => 'nullable'
        ]);
        $product->update($data);
        return redirect(route('products.index'))->with('success', "updatde success");
    }

    public function delete(product $product)
    {

        $product->delete();
        return redirect(route('products.index'))->with('success', "Delete success");
    }
}
