@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')
    <h1>{{$product->name}}</h1>
    <p>Price: {{$product->price}}</p>
    <p>URL: {{$product->url}}</p>
    <p>Manufacturer: {{$product->manufacturer->name}}</p>
    <br>
    <h1>Reviews</h1>
    @foreach ($reviews as $review)
        @if ($review->product_id == $product->id)
        <p>{{$review->rating}} - {{$review->review}}</p>
        @endif
    @endforeach

    @auth
    <p><a href='{{url("product/$product->id/edit")}}'>Edit</a></p>
    <p>
        <form method="POST" action='{{url("product/$product->id")}}'>
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
    @endauth
    
@endsection
