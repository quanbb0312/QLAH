@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Customer</h4>
                        <form class="forms-sample" action="{{ route('customer-save') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                                    required>
                            </div>
                            <!-- Add other fields here as needed -->
                            <button type="submit" class="btn btn-primary mr-2">Add Customer</button>
                            <a href="{{ route('customer-list') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
