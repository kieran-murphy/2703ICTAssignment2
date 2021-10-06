<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{

    function __construct(){
        $this->middleware('auth', ['except'=>[ 'index', 'show', 'show_reviews' ]]);
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
        /*
        if(Gate::allows('is-moderator')){
            dd('success');
        } else {
            dd('no');
        }
        */
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
            'image' => 'required|max:255',
            'manufacturer' => 'exists:manufacturers,id'
        ]);

        $image_store = request()->file('image')->store('/Users/kieranmurphy/Documents/Uni/webAppDev/assignment2/prod/public/products_images');
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->url = $request->url;
        $product->image = $image_store;
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
        $users = User::all();
        $reviews = Review::all();
        $product = Product::find($id);
        $reviews = $product->reviews;
        $totallikes = 0;
        $totaldislikes = 0;
        foreach ($reviews as $review) {
            $totallikes += $review->likes;
            $totaldislikes += $review->dislikes;
        }
        
        return view('products.show')->with('product', $product)->with('reviews', $reviews)->with('users', $users)->with('totaldislikes', $totaldislikes)->with('totallikes', $totallikes);
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
        
        //$image_store = request()->file('image')->store('/Users/kieranmurphy/Documents/Uni/webAppDev/assignment2/prod/public/products_images');
        $image_store = request()->file('image')->store('', 'public');
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->url = $request->url;
        $product->image = $image_store;
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
        Review::where('product_id', $id)->delete();
        Product::where('id', $id)->delete();
        return redirect(url("product"));
    }

    public function show_reviews(Request $request, $id)
    {
        $users = User::all();
        $product = Product::find($id);
        $reviews = Review::where('product_id', '=', $id)->paginate(5);

        return view('products.show_review_list')->with('product', $product)->with('reviews', $reviews)->with('users', $users);
    }
}
