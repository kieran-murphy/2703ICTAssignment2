@extends('layouts.master')
@section('title')
    Users
@endsection
@section('content')

<h1>Users </h1>
<br>

<div class="tablediv">
    <div class="list-group">
        @foreach ($users as $user)
            <a href='{{url("user/$user->id")}}' class="list-group-item list-group-item-action">{{ $user->name }}</a>
        @endforeach
    </div>
</div>



@endsection