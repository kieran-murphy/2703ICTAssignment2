@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')
    <h1>{{$product->name}}</h1>
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
        <td>{{$product->url}}</td>
        
        </tr>
        <tr>
        <th>Manufacturer</th>
        <td>{{$product->manufacturer->name}}</td>
        </tr>
        
    </tbody>
    </table>
    </div>
    
    
    @auth
    <br>
    <p><a href='{{url("product/$product->id/edit")}}'>Edit</a></p>
    <p>
        <form method="POST" action='{{url("product/$product->id")}}'>
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
    @endauth
    
    
    
    <br>
    <h1><a href='{{url("product/$product->id/show_reviews")}}'>Reviews</a></h1>
    

    
    
@endsection
