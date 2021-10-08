@extends('layouts.master')
@section('title')
    Unfollow {{$user->name}}?
@endsection
@section('content')

<h1>Are you sure you want to unfollow {{$user->name}}?</h1>
    <form method="POST" action='{{url("follow")}}'>
        {{csrf_field()}}
        
        <input type="hidden" name="follower_id" value="{{Auth::user()->id}}">
        <input type="submit" value="Unfollow">
    </form>

@endsection
