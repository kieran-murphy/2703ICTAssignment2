@extends('layouts.master')
@section('title')
    Review
@endsection
@section('content')

<h1><a href='{{url("product/$product->id")}}'>{{ $product->name }}</a> - Reviews</h1>
<br>

<div class="tablediv">
    <div class="list-group">
        @foreach ($reviews as $review)
            
            @foreach ($users as $user)
                    @if ($user->id == $review->user_id)
                        @if ($review->likes > $review->dislikes)
                        <a href='{{url("reviews/$review->id/show")}}' class="list-group-item list-group-item-success">{{$user->name}}: {{$review->rating}} - {{$review->review}} 👍 {{$review->likes}} | 👎 {{$review->dislikes}}</a>
                        @elseif ($review->likes < $review->dislikes)
                        <a href='{{url("reviews/$review->id/show")}}' class="list-group-item list-group-item-danger">{{$user->name}}: {{$review->rating}} - {{$review->review}} 👍 {{$review->likes}} | 👎 {{$review->dislikes}}</a>
                        @else ($review->likes == $review->dislikes)
                        <a href='{{url("reviews/$review->id/show")}}' class="list-group-item list-group-item-action">{{$user->name}}: {{$review->rating}} - {{$review->review}} 👍 {{$review->likes}} | 👎 {{$review->dislikes}}</a>
                        @endif
                    @endif
                @endforeach
            
        @endforeach
    </div>
</div>
<br>
{{ $reviews->links() }} 
@auth

<p><a href='{{url("reviews/$product->id/create")}}'>Add Review</a></p>
@endauth
    
    
    
    
@endsection
