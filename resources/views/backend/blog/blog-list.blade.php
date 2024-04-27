@extends('backend.layouts.backend-app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Blog List</h5>
                        <a href="{{ url('admin/blog/add') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Meta Title</th>
                                <th scope="col">Meta Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($blogs as $key=> $category)
                                <tr>
                                    <th scope="row">{{ $blogs->firstItem() + $key }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->meta_title }}</td>
                                    <td>{{ $category->meta_description }}</td>
                                    
                                    <td>
                                        <a href="{{ url('admin/category/edit') }}/{{ $category->id }}" class="btn btn-sm btn-primary ">Edit</a>&nbsp;&nbsp;
                                        <a onclick="return confirm('Are You Sure')" href="{{ url('admin/category/delete') }}/{{ $category->id }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No data found!</td>
                                </tr>
                            @endforelse --}}
                        </tbody>
                    </table>
                    {{-- <a class="d-flex justify-content-end" href="{{ url('admin/blog/restore') }}">Restore Data</a>
                    {{ $blogs->links() }} --}}
                    </>
                </div>
            </div>

        </div>
    @endsection
