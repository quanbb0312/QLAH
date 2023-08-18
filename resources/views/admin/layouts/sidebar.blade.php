<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('storage/images/' . Auth::user()->photo) }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/index') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#menu-category" aria-expanded="false"
                aria-controls="menu-category">
                <span class="menu-title">Category Manager</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="menu-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category-add') }}">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category-list') }}">Show all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category-list') }}">Edit/Delete</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#menu-product" aria-expanded="false"
                aria-controls="menu-product">
                <span class="menu-title">Product Manager</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="menu-product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product-add') }}">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product-list') }}">Show All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product-list') }}">Edit/Delete</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#menu-customer" aria-expanded="false"
                aria-controls="menu-customer">
                <span class="menu-title">Customer Manager</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="menu-customer">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer-add') }}">Add Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer-list') }}">Show all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer-list') }}">Edit/Delete</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#menu-order" aria-expanded="false"
                aria-controls="menu-order">
                <span class="menu-title">Order Manager</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="menu-order">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order-add') }}">Add Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order-list') }}">Show all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order-list') }}">Edit/Delete</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
