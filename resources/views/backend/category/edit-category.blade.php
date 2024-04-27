@extends('backend.layouts.backend-app')

@section('content')
    <div class="container">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Category</h5>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="row g-3" action="{{ url('admin/category/edit/') }}/{{ $category->id }}" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Category Name</label>
                            <input type="text" name="name" value="{{ $category->name }}"
                                class="form-control @error('name') is in-valid
                            
                        @enderror"
                                id="inputNanme4">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Category Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug }}"
                                class="form-control @error('slug') is in-valid
                            
                        @enderror"
                                id="slug">
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                class="form-control @error('meta_title') is in-valid
                            
                        @enderror"
                                id="meta_title">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="meta_description" cols="30" rows="10">{{ $category->meta_description }}</textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
