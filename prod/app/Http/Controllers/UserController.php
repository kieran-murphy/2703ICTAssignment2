<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.users_index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $follows = Follow::where('follower_id', '=', $id)->paginate(100);
        $followers = Follow::where('followed_id', '=', $id)->paginate(100);
        return view('users.show_user')->with('user', $user)->with('follows', $follows)->with('followers', $followers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show_following($id)
    {
        $userone = User::find($id);
        $users = User::all();
        $follows = Follow::where('follower_id', '=', $id)->paginate(100);
        

        return view('users.show_following')->with('userone', $userone)->with('users', $users)->with('follows', $follows);
    }

    public function show_followers($id)
    {
        $users = User::all();
        $userone = User::find($id);
        $followers = Follow::where('followed_id', '=', $id)->paginate(100);
        return view('users.show_followers')->with('userone', $userone)->with('users', $users)->with('followers', $followers);
    }
}
