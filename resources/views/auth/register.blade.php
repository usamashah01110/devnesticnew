<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
  <style>
        .brand-logo{
        display: flex;
        justify-content: center;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="{{ asset('logo2.jpg') }}">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Username" required>
                </div>
                <!-- Email -->
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" required>
                </div>
                <!-- Password -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                </div>
                <!-- Confirm Password -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                  </div>
                </div>
                <div class="mt-3 d-grid gap-2">
{{--                  <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{asset('admin/index.html')}}">SIGN UP</a>--}}
                    <input type="submit" value="SIGN UP" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
                </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
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
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
                    <!-- endinject -->
                    <!-- Plugin js for this page -->
                    <!-- End plugin js for this page -->
                    <!-- inject:js -->
                    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
                    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
                    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
                    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
                    <script src="{{asset('admin/assets/js/jquery.cookie.js')}}"></script>
                    <!-- endinject -->
</body>

</html>
