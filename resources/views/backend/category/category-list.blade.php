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
                        <h5 class="card-title">Users List</h5>
                        <a href="{{ url('admin/users/add') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($allUser as $key=> $user)
                                <tr>
                                    <th scope="row">{{ $allUser->firstItem() + $key }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->status == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/users/edit') }}/{{ $user->id }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a onclick="return confirm('Are You Sure')" href="{{ url('admin/users/delete') }}/{{ $user->id }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No data found!</td>
                                </tr>
                            @endforelse --}}
                        </tbody>
                    </table>
                    {{-- {{ $allUser->links() }} --}}
                    <!-- End Default Table Example -->
                    </>
                </div>
            </div>

        </div>
    @endsection
