@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Customer</h4>
                        <form class="forms-sample" action="{{ route('customer-update', $customer->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $customer->name }}" required>
                                @error('name')
                                    <div class="text text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ $customer->phone }}" required>
                                @error('phone')
                                    <div class="text text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ $customer->email }}" required>
                                @error('email')
                                    <div class="text text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="email">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" value="{{ $customer->address }}" required>
                                @error('address')
                                    <div class="text text-danger">{{ $message }}</div>
                                @enderror
                                <br>
                            </div>
                            <!-- Add other fields here as needed -->
                            <button type="submit" class="btn btn-primary mr-2">Update Customer</button>
                            <a href="{{ route('customer-list') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
