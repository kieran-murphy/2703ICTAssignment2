@extends('layouts.master')
@section('title')
    Recommendation
@endsection
@section('content')
    
<h1>You searched for: <i>{{$search}}</i>, <br> we recommend <u>{{$product->name}}</u></h1>
<a href="ask_recommendation">Search again?</a> <br>
    <br>
    <div class="tablediv">
    <table class="table table-striped table-hover table-bordered">
    <tbody>
        <tr>
        <th>Price</th>
        <td>{{$product->price}}</td>
        
        </tr>
        <tr>
        <th>URL</th>
        <td><a href="https://{{$product->url}}" target="_blank">{{$product->url}}</a></td>
        
        </tr>
        <tr>
        <th>Manufacturer</th>
        <td>{{$product->manufacturer->name}}</td>
        </tr>

        <tr>
        <th>Image</th>
        <td><img src="{{url($product->image)}}" alt="{{url($product->image)}}" style="width: 300px; height: 300px;"></td>
        </tr>
        
        
    </tbody>
    </table>
    </div>

@endsection