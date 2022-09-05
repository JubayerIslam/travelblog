@extends('backend.master')

@section('content')
<div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Show DataTable</strong> 
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
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ ucfirst($category->name) }}</td>
                            <td>
                            <a href="{{ url('/edit/category/'.$category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('/delete/category/'.$category->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection