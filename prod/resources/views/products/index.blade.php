@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')
<ul>
    @foreach ($products as $product)
        <a href='{{url("product/$product->id")}}'><li>{{ $product->name }}</li></a>
    @endforeach
</ul>

@endsection
