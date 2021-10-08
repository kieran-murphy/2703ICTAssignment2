<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;


class FollowController extends Controller
{
    public function create($id)
    {
        $user = User::find($id);
        return view('users.create_follow')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $follow = new Follow();
        $follow->followed_id = $request->followed_id;
        $follow->follower_id = $request->follower_id;
       
        $follow->save();
        return redirect(url("user/$follow->followed_id"));
    }

    public function destroy($id)
    {
        Follow::where('follower_id', $id)->delete();
        return redirect(url("user"));
    }
}
