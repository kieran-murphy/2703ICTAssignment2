@extends('layouts.master')
@section('title')
    Review
@endsection
@section('content')

@foreach ($users as $user)
    @if ($user->id == $review->user_id)
        <h1>{{$user->name}}</h1>
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
        <th>👍</th>
        <td>{{$review->likes}}</td>
        </tr>

        <tr>
        <th>👎</th>
        <td>{{$review->dislikes}}</td>
        </tr>
        
    </tbody>
    </table>
    </div>

@endsection
