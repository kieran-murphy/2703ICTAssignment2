<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function __construct(){
        $this->middleware('auth', ['except'=>[ 'index', 'show' ]]);
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        $products = Product::paginate(5);
        return view('products.index')->with('products', $products);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'url' => 'nullable|max:255',
            'manufacturer' => 'exists:manufacturers,id'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->url = $request->url;
        $product->manufacturer_id = $request->manufacturer;
        $product->save();
        return redirect(url("product/$product->id"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviews = Review::all();
        $product = Product::find($id);
        return view('products.show')->with('product', $product)->with('reviews', $reviews);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit_form')->with('product', $product)->with('manufacturers', Manufacturer::all());
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'url' => 'nullable|max:255',
            'manufacturer' => 'exists:manufacturers,id'
        ]);
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->url = $request->url;
        $product->manufacturer_id = $request->manufacturer;
        $product->save();
        return redirect(url("product/$product->id"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect(url("product"));
    }
}
