@extends('layouts.master')
@section('title')
    Recommendation
@endsection
@section('content')
    <h1>What are you looking for?</h1>
    <br>
    
    <form method="GET" action='{{url("show_recommendation")}}'>
        {{csrf_field()}}
        <input type="text" name="search" placeholder="Enter search here">
        <input type="submit" value="Search">
    </form>
    <p>Try some keywords: <i>Fast, Durable, Good, Fast, etc.</i></p>
@endsection