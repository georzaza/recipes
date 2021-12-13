<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $products = DB::table('products')
                ->orderBy('exp_date')
                ->get();
        return view('products.index', ['products' => $products]);
    }

    public function create() {
        return view('products.create');
    }


    /** Store a newly created resource in storage. 
     * 
     * The regex for the price and weight fields (double) is probably enough
     * A double input on these fields, e.g. 0.25 for weight,  means 250 gr, 
     * and we inform the user about it.
     */
    public function store(Request $request) {
        $request->validate([
            'product_name'  => 'required', 
            'exp_date'      => 'required|date', 
            'qty'           => 'required',
            'weight'        => 'nullable|regex:/^\d+(\.\d{1,3})?$/', 
            'details'       => 'nullable'
        ]);
        $product = new Product([
            'product_name'  => $request->get('product_name'), 
            'exp_date'      => $request->get('exp_date'), 
            'qty'           => $request->get('qty'), 
            'weight'        => $request->get('weight'), 
            'details'       => $request->get('details')
        ]);
        $product->save();
        return redirect('/products')->with('success', 'product saved!');
    }


    /** Display the specified resource. */
    public function show($id) {  
        //
    }


    /** Redirect to the edit form */
    public function edit(Request $r, $id) {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }


    /** Update the specified resource in storage. */
    public function update(Request $request, $id) {
        $request->validate([
            'product_name'  => 'required', 
            'exp_date'      => 'required|date', 
            'qty'           => 'required', 
            'weight'        => 'nullable|regex:/^\d+(\.\d{1,3})?$/', 
            'details'       => 'nullable'
        ]);
        $product = Product::find($id);
        $product->product_name  = $request->get('product_name');
        $product->exp_date      = $request->get('exp_date');
        $product->qty           = $request->get('qty');
        $product->weight        = $request->get('weight');
        $product->details       = $request->get('details');
        $product->save();
        return redirect('/products')->with('success', 'product updated!');
    }


    /** Removes a product from the database. */
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'product deleted!');
    }   

}
