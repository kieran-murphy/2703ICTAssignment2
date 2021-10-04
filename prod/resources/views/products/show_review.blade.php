@extends('layouts.master')
@section('title')
    Review
@endsection
@section('content')

@foreach ($users as $user)
    @if ($user->id == $review->user_id)
        <h1><a href='{{url("product/$review->product_id/show_reviews")}}'><- </a>{{$user->name}}</h1>
    @endif 
@endforeach
    <br>
    
    <div class="tablediv">
    <table class="table table-striped table-hover table-bordered">
    <tbody>
        <tr>
        <th>Review</th>
        <td>{{$review->review}}</td>
        
        </tr>
        <tr>
        <th>Rating</th>
        <td>{{$review->rating}}</td>

        <tr>
        <th>Created</th>
        <td>{{$review->created_at}}</td>
        
        </tr>
        
        </tr>
        
        <tr>
        <th><a href='{{url("reviews/$review->id/like")}}'>👍</a></th>
        <td>{{$review->likes}}</td>
        </tr>
        

        <tr>
        <th><a href='{{url("reviews/$review->id/dislike")}}'>👎</a></th>
        <td>{{$review->dislikes}}</td>
        </tr>
        
    </tbody>
    </table>
    </div>
    

    @auth
    @if (Auth::user()->type == 'Moderator' || Auth::user()->id == $review->user_id)
    <br>
    <p><a href='{{url("reviews/$review->id/edit")}}'>Edit</a></p>
    <p>
        <form method="POST" action='{{url("reviews/$review->id")}}'>
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
    @endif
    @endauth

@endsection
