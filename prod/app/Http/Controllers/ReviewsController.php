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
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rating' => 'required|numeric|max:5',
            'review' => 'required|max:255',
            'user' => 'exists:users,id',
            'product' => 'exists:products,id'
        ]);

        $review = new Review();
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->user_id = $request->user;
        $review->product_id = $request->product;
        $review->likes = 0;
        $review->dislikes = 0;
        $review->save();
        return redirect(url("product/$review->product_id"));
    } 
}
