<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;    /* Very important (use Product model) */
use App\Manufacturer;    /* Very important (use Manufacturer model) */

class ProductController extends Controller
{   
    
    public function __construct() {
        // $this->middleware('auth', ['except'=>'index']); // guest can't see other page except index page
        //$this->middleware('auth', ['only' => ['create', 'edit', 'destroy']]);
        $this->middleware('auth', ['except' => ['index', 'show']]); // best practice for block everything and except the page for see
    }
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     
    {
        $products = Product::all(); // Get all of the products
        return view('products.index')->with('products', $products);
        // return view('product.index')->withProducts($products);  // magic method
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create_form')->with('manufacturers', Manufacturer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        /** Input validation **/
        $this->validate($request, [
            'name'=>'required|max:255',
            'price'=>'required|numeric',
            'manufacturer'=>'exists:manufacturers,id'
        ]);
        
        // All the errors will store in the $errors which can access in all views
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->manufacturer_id = $request->manufacturer;
        $product->save();
        return redirect("/product/$product->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('at edit mode');
        $product = Product::find($id);
        return view('products.edit_form')->with('product', $product)->with('manufacturers', Manufacturer::all());  // also pass all the manufacturers
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->name);
         /** Input validation **/
        $this->validate($request, [
            'name'=>'required|max:10',
            'price'=>'required|numeric|min:1',
            'manufacturer'=>'exists:manufacturers,id'
        ]);
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->manufacturer_id = $request->manufacturer;
        $product->save();
        return redirect("/product/$product->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/product");
    }
}
