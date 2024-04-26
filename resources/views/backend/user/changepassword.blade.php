@extends('backend.layouts.backend-app')

@section('content')
<div class="container">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update User Information</h5>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form class="row g-3" action="{{ url('admin/users/password-change') }}/{{ $password->id }}" method="post">
                    @csrf
                     <div class="col-12">
                        <label for="inputPassword4" class="form-label">Old Password</label>
                        <input type="password" name="old_password" class="form-control @error('password') is in-valid
                            
                        @enderror" id="inputPassword4">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                     <div class="col-12">
                        <label for="inputPassword5" class="form-label">New Password</label>
                        <input type="password" name="password" class="form-control @error('password') is in-valid
                            
                        @enderror" id="inputPassword5">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                     <div class="col-12">
                        <label for="inputPassword6" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is in-valid
                            
                        @enderror" id="inputPassword5">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
