@extends('admin.master')
@section('content')
    <!-- partial -->
        <div class="content-wrapper">
            <div class="row">
                <div class="container mt-3" style="margin-top:20px">
                    <h2>Add new User</h2>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('user-save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="name">User Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                placeholder="Enter user name" required>
                            @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name">User Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                placeholder="Enter user email" required>
                                @error('email')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="image">User Photo:</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" required>
                            @error('photo')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name">User Password:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                            placeholder="Enter user password" required>
                            @error('password')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('user-list') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
