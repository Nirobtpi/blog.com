@extends('backend.layouts.backend-app')

@section('content')
    <div class="container">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Blog</h5>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="row g-3" action="{{ url('admin/blog/add') }}" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Blog Title *</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is in-valid
                            
                        @enderror"
                                id="inputNanme4">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputNanme3" class="form-label">Blog Slug *</label>
                            <input type="text" name="slug" value="{{ old('name') }}"
                                class="form-control @error('name') is in-valid
                            
                        @enderror"
                                id="inputNanme3">
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="category" class="form-label">Category *</label>
                            <select name="category_id" class="form-control" id="category">
                                <option value="">Selecte Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" name="tags" id="tags" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="image" class="form-label">Image *</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                       
                        <div class="col-12">
                            <label for="description" class="form-label">Description *</label>
                            <textarea name="meta_description" class="form-control tinymce-editor" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                         <div class="col-12">
                            <label for="public" class="form-label">Publish</label>
                            <select class="form-control" name="public" id="public">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">create Blog</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
