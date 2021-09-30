@extends('layouts.master')
@section('title')
    Review
@endsection
@section('content')

@foreach ($reviews as $review)
    @if ($review->product_id == $product->id)
    @foreach ($users as $user)
            @if ($user->id == $review->user_id)
                <p><a href='{{url("review/$review->id")}}'>{{$user->name}}: {{$review->rating}} - {{$review->review}} 👍 {{$review->likes}} | 👎 {{$review->dislikes}}</a></p> 
            @endif
        @endforeach
    @endif
@endforeach
{{-- $reviews->links() --}} 
<p><a href='{{url("reviews/create")}}'>Add Review</a></p>
    
    
    
    
    
@endsection
