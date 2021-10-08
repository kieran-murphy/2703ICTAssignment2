@extends('layouts.master')
@section('title')
    {{$userone->name}}: Following
@endsection
@section('content')

<h1>{{$userone->name}}: Following </h1>

<br>

<div class="tablediv">
    <div class="list-group">
        @foreach ($follows as $follow)
            <a href='{{url("user/$follow->followed_id")}}' class="list-group-item list-group-item-action">
            @foreach($users as $user) 
                @if ($user->id == $follow->followed_id)
                    {{$user->name}}
                @endif
            @endforeach
            </a>
        @endforeach
    </div>
</div>

@endsection
