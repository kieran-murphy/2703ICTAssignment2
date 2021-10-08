@extends('layouts.master')
@section('title')
    Follow {{$user->name}}?
@endsection
@section('content')

<h1>Are you sure you want to follow {{$user->name}}?</h1>
    <form method="POST" action='{{url("follow")}}'>
        {{csrf_field()}}
        <input type="hidden" name="followed_id" value="{{$user->id}}">
        <input type="hidden" name="follower_id" value="{{Auth::user()->id}}">
        <input type="submit" value="Follow">
    </form>

@endsection
