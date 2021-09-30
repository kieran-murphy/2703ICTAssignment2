@extends('layouts.master')
@section('title')
    Review
@endsection
@section('content')
    <h1>{{$review->rating}}</h1>
    <p>Review: {{$review->review}}</p>
    <p>Likes: {{$review->likes}}</p>
    <p>Dislikes: {{$review->dislikes}}</p>
    
    
    
    
    
@endsection
