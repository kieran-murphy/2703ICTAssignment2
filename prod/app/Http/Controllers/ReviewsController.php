<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create_review_form')->with('products', Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
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
    } */
}
