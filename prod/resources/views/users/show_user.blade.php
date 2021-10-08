@extends('layouts.master')
@section('title')
    {{$user->name}}
@endsection
@section('content')
    <h1>{{$user->name}}</h1>
    <br>
    
    <div class="tablediv">
    <table class="table table-striped table-hover table-bordered">
    <tbody>
        <tr>
        <th>Role</th>
        <td>{{$user->type}}</td>
        </tr>       
        <tr>
        <th><a href='{{url("user/$user->id/show_following")}}'>Following</a></th>
        <td>{{count($follows)}}</td>
        </tr> 
        <tr>
        <th><a href='{{url("user/$user->id/show_followers")}}'>Followers</a></th>
        <td>{{count($followers)}}</td>
        </tr>     
    </tbody>
    </table>
    </div>

@auth
<a href='{{url("follow/$user->id/create")}}'>Follow</a> 
@endauth

    
    
@endsection
