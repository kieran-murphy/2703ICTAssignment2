@extends('layouts.master')
@section('title')
    Write Review
@endsection
@section('content')
    @if (count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action='{{url("reviews")}}'>
        {{csrf_field()}}
        <input type="hidden" name="user" value="{{Auth::user()->id}}">
        <p><label>Rating: </label>
        <input type="range" name="rating" value="3" min="1" max="5" oninput="this.nextElementSibling.value = this.value"> <output>3</output>
        <p><label>Review: </label>
        <input type="text" name="review" value="{{ old('review') }}"></p>
        <p><select name="product">
            @foreach ($products as $product)
                @if($product->id==old('product'))
                    <option value="{{$product->id}}" selected="selected">{{$product->name}}</option>
                @else
                    <option value="{{$product->id}}">{{$product->name}}</option>
                @endif
            @endforeach
        </select></p>
        <input type="submit" value="Create">
        </form>
@endsection