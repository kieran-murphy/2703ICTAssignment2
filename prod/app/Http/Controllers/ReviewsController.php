<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $productone = Product::find($id);
        return view('products.create_review_form')->with('products', Product::all())->with('productone', $productone);
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

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        $users = User::all();
        
        return view('products.show_review')->with('review', $review)->with('users', $users);
    }

    public function edit($id)
    {
        $review = Review::find($id);
        return view('products.edit_review_form')->with('review', $review)->with('products', Product::all());
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
            'rating' => 'required|numeric|max:5',
            'review' => 'required|max:255',
            'user' => 'exists:users,id',
            'product' => 'exists:products,id'
        ]);
        
        $review = Review::find($id);
        $review->rating = $request->rating;
        $review->review = $request->review;
        //$review->user_id = $request->user;
        $review->product_id = $request->product;
        $review->save();
        return redirect(url("reviews/$review->id"));
    }

    public function destroy($id)
    {
        Review::where('id', $id)->delete();
        return redirect(url("product"));
    }

    public function like($id)
    {
        $review = Review::find($id);
        $review->likes += 1;
        $review->save();
        return redirect(url("reviews/$review->id"));
    }

    public function dislike($id)
    {
        $review = Review::find($id);
        $review->dislikes += 1;
        $review->save();
        return redirect(url("reviews/$review->id"));
    }
}
