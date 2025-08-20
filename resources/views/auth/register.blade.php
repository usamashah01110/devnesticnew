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

  <!-- <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"> -->
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    :root {
      --gold-primary: #E89922;
      --gold-secondary: #FFD700;
      --gold-light: #F5E9BC;
      --gold-dark: #B8860B;
      /* --cream-bg: #FDF6E3; */
      /* --cream-card: #FFF9E6; */
      --text-dark: #5C3A00;
      --text-muted: #8E6C3A;
      --shadow: 0 10px 30px rgba(180, 140, 40, 0.15);
    }

    body {
      background: linear-gradient(135deg, var(--cream-bg) 0%, #FEF9E7 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      color: var(--text-dark);
    }

    .container-scroller {
      width: 100%;
    }

    .page-body-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .auth-card {
      background: var(--cream-card);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: var(--shadow);
      position: relative;
      width: 50vw;
      max-width: 440px;
      margin: 0 auto;
    }

    .auth-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 6px;
      background: linear-gradient(90deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
    }

    .auth-form-light {
      padding: 40px;
    }

    .brand-logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .brand-logo img {
      max-height: 100px;
    }

    h4 {
      color: var(--gold-dark);
      font-weight: 600;
      margin-bottom: 10px;
      text-align: center;
    }

    .font-weight-light {
      color: var(--text-muted);
      text-align: center;
      margin-bottom: 35px;
      font-size: 1rem;
    }

    .form-group {
      margin-bottom: 24px;
    }

    .form-control-lg {
      width: 100%;
      background: rgba(255, 255, 255, 0.7);
      border: 2px solid var(--gold-light);
      color: var(--text-dark);
      padding: 16px 20px;
      border-radius: 10px;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .form-control-lg:focus {
      outline: none;
      border-color: var(--gold-primary);
      box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
    }

    .form-control-lg::placeholder {
      color: var(--text-muted);
      opacity: 0.7;
    }

    .btn-gradient-primary {
      background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-dark) 100%);
      color: white;
      border: none;
      padding: 16px 20px;
      font-weight: 600;
      font-size: 16px;
      border-radius: 10px;
      width: 100%;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(180, 140, 40, 0.25);
      margin-top: 2rem;
    }

    .btn-gradient-primary:hover {
      /* transform: translateY(-2px); */
      box-shadow: 0 7px 20px rgba(180, 140, 40, 0.35);
    }

    .btn-gradient-primary:active {
      transform: translateY(0);
    }

    .form-check-label {
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    .form-check-input {
      accent-color: var(--gold-primary);
      margin-right: 8px;
    }

    .text-center {
      text-align: center;
      margin-top: 30px;
      color: var(--text-muted);
    }

    .text-center a {
      color: var(--gold-dark);
      font-weight: 600;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .text-center a:hover {
      color: var(--gold-primary);
      text-decoration: underline;
    }

    @media (max-width: 576px) {
      .auth-form-light {
        padding: 30px 25px;
      }
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-card">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{ asset('logo2.jpg') }}">
                </div>
                <h4>New here?</h4>
            
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
                    {{-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{asset('admin/index.html')}}">SIGN UP</a>--}}
                    <input type="submit" value="SIGN UP" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
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