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
    </tbody>
    </table>
    </div>

    <br>
    <h1><a href='{{url("user/$user->id/show_following")}}'>Following</a></h1>
    <br>
    <h1><a href='{{url("user/$user->id/show_followers")}}'>Followers</a></h1>
    


    
    
@endsection
