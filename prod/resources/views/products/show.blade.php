@extends('layouts.master')
@section('title')
    {{$product->name}}
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
        <td><a href="https://{{$product->url}}" target="_blank">{{$product->url}}</a></td>
        
        </tr>
        <tr>
        <th>Manufacturer</th>
        <td>{{$product->manufacturer->name}}</td>
        </tr>

        <tr>
        <th>Image</th>
        <td><img src="{{url($product->image)}}" alt="{{url($product->image)}}" style="width: 400px; height: 400px;"></td>
        </tr>
        
        
    </tbody>
    </table>
    </div>
    
    
    @auth
    @if (Auth::user()->type == 'Moderator')
    <br>
    <p><a href='{{url("product/$product->id/edit")}}'>Edit</a></p>
    <p>
        <form method="POST" action='{{url("product/$product->id")}}'>
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
    @endif
    @endauth
    
    
    
    <br>
    <h1><a href='{{url("product/$product->id/show_reviews")}}'>Reviews - {{$product->reviews->count()}}</a></h1>
    

    
    
@endsection
