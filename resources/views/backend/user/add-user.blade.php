@extends('backend.layouts.backend-app')

@section('content')
<div class="container">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New User</h5>
                <form class="row g-3" action="" method="post">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is in-valid
                            
                        @enderror" id="inputNanme4">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is in-valid
                            
                        @enderror" id="inputEmail4">

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is in-valid
                            
                        @enderror" id="inputPassword4">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation " class="form-control" id="inputPassword5">
                    </div>
                    <div class="col-md-12">
                        <select id="inputState" class="form-select" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection
