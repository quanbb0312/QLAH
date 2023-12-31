<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QLAH Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../admin/assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="../admin/assets/images/logo.svg">
                            </div>
                            <h4>Hello! Let's get started</h4>
                            <h6 class="font-weight-light">Change the password of the account to continue.</h6>
                            <form class="pt-3" action="{{ route('change-password') }}" method="POST">
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                        placeholder="Email">
                                        @error('email')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror<br>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg @error('oldPassword') is-invalid @enderror" name="oldPassword"
                                        placeholder="Old Password">
                                        @error('oldPassword')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror<br>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg @error('newPassword') is-invalid @enderror" name="newPassword"
                                        placeholder="New Password">
                                        @error('newPassword')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror<br>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg @error('confirmPassword') is-invalid @enderror" name="confirmPassword"
                                        placeholder="Confirm New Password">
                                        @error('confirmPassword')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror<br>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                        SAVE
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Have an account?
                                    <a href="{{ route('adminLogin') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../admin/assets/js/off-canvas.js"></script>
    <script src="../admin/assets/js/hoverable-collapse.js"></script>
    <script src="../admin/assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>
