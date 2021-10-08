@extends('layouts.master')
@section('title')
    Product Create
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

    <form method="POST" action='{{url("product")}}' enctype="multipart/form-data">
        {{csrf_field()}}
        <p><label>Name: </label>
        <input type="text" name="name" value="{{ old('name') }}"></p>
        <p><label>Price: </label>
        <input type="text" name="price" value="{{ old('price') }}"></p>
        <p><label>URL: </label>
        <input type="text" name="url" value="{{ old('url') }}"></p>
        <p><label>Image: </label>
        <input type="file" name="image"></p>
        <p><select name="manufacturer">
            @foreach ($manufacturers as $manufacturer)
                @if($manufacturer->id==old('manufacturer'))
                    <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
                @else
                    <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                @endif
            @endforeach
        </select></p>
        <input type="submit" value="Create">
        </form>
@endsection
