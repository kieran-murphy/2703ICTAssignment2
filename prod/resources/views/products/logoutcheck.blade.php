@extends('layouts.master')
@section('title')
    Logout
@endsection
@section('content')
    <h1>Are you sure you want to logout?</h1>
    
    <form method="POST" action="{{url('/logout')}}">
        {{csrf_field()}}
        <input type="submit" value="Logout">
    </form>
    
@endsection
