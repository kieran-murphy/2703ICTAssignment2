@extends('layouts.master')
@section('title')
    {{$userone->name}}: Followers
@endsection
@section('content')

<h1>{{$userone->name}}: Followers </h1>

<br>

<div class="tablediv">
    <div class="list-group">
        @foreach ($followers as $follower)
            <a href='{{url("user/$follower->follower_id")}}' class="list-group-item list-group-item-action">
            @foreach($users as $user) 
                @if ($user->id == $follower->follower_id)
                    {{$user->name}}
                @endif
            @endforeach
            </a>
        @endforeach
    </div>
</div>
<br>
{{ $followers->links() }} 


@endsection