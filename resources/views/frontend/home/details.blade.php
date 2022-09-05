@extends('frontend.master') @section('content')
<div class="container">
    <div class="col-md-12 pt-3 mb-3">
        <div class="row">
            <div class="col-md-6 px-4">
                <img src="{{ asset('post/img/'.$post->image) }}" alt="" width="100%" height="400" />
            </div>
            <div class="col-md-6">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->created_at->diffForHumans() }} | {{ $post->user ? ucfirst($post->user->name) : 'Guest User' }}</p>
                <p>{{ $post->description }}</p>
            </div>
        </div>
    </div>
    <form action="{{ url('/comment/store') }}" method="post">
        <label for=""><strong>Comments:</strong></label>
        <textarea name="message" id="" cols="30" rows="5" class="form-control mb-3" placeholder="Enter your comment"></textarea>
        <button type="submit" class="btn btn-success mb-2">Submit</button>
    </form>
    
</div>
@endsection
