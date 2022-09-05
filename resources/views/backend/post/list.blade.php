@extends('backend.master')

@section('content')
<div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Show Post Table</strong>
            </div>
            <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Delete successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>
                                <img src="{{ asset('/post/img/'.$post->image) }}" alt="Photo" height="100" width="100">
                            </td>
                            <td>
                            <a href="{{ url('/edit/post/'.$post->id) }}" class="btn  btn-primary">Edit</a>
                            <a href="{{ url('/delete/post/'.$post->id) }}" class="btn  btn-danger mt-2">Delete</a>
                            </td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection