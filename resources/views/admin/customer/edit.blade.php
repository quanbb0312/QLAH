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
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $customer->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ $customer->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $customer->email }}" required>
                            </div>
                            <!-- Add other fields here as needed -->
                            <button type="submit" class="btn btn-primary mr-2">Update Customer</button>
                            <a href="{{ url('admin/customer-list') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
