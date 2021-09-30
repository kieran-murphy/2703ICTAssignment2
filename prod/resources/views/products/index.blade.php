@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')

<h1>Products 📱</h1>
<br>

<div class="tablediv">
    <div class="list-group">
        @foreach ($products as $product)
            <a href='{{url("product/$product->id")}}' class="list-group-item list-group-item-action">{{ $product->name }}</a>
        @endforeach
    </div>
</div>

@endsection
