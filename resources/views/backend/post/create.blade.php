@extends('backend.master')

@section('content')
<div class="container-fluid px-4 mt-5">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('/post/store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Post added successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><strong>Add Post</strong></div>
                        <div class="card-body">
                            <label for="">Category Name</label>
                            <select name="category_id" id="" class="form-control mb-2 mt-1">
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <label for="">Title </label>
                            <input type="text" class="form-control mb-2 mt-1" name="title" id="" placeholder="post title">
                            <label for="">Description </label>
                            <textarea class="form-control mb-3 mt-1" name="description" id="" rows="8"></textarea>
                            <input type="file" name="image" class="form-control mb-3 mt-1" >
                            <button type="submit" name="btn" class="btn btn-success mt-2">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </form>
</div>
@endsection