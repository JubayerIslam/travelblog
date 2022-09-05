@extends('backend.master')

@section('content')
<div class="container-fluid px-4 mt-5">
    <form action="{{ url('/category/store') }}" method="post">
        @csrf
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Category added successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><strong>Add Category</strong></div>
                        <div class="card-body">
                            <label for="">Category Name</label>
                            <input type="text" name="name" class="form-control mt-2" placeholder="category name..">
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