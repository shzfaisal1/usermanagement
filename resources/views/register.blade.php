<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('backend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .password-strength {
      margin-top: 5px;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Registration Page</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create Your Account</h5>
                    <p class="text-center small">Please fill in the following details to create an account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{url('/register')}}" method="post">
                @csrf
                  <div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required>
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
    <div id="password-strength" class="password-strength"></div>
    @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label for="number" class="form-label">Phone Number</label>
    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="number" value="{{ old('phone_number') }}" required>
    @error('phone_number')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" id="dob" value="{{ old('date_of_birth') }}" required>
    @error('date_of_birth')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label class="form-label">Gender</label>
    <div class="form-check">
        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="male" required>
        <label class="form-check-label" for="male">Male</label>
    </div>
    <div class="form-check">
        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="female" required>
        <label class="form-check-label" for="female">Female</label>
    </div>
    @error('gender')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{url('/')}}">Login here</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>

  <!-- Password Strength Checker -->
  <script>
    document.getElementById('password').addEventListener('input', function() {
      var password = document.getElementById('password').value;
      var strength = document.getElementById('password-strength');

      var regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
      if (regex.test(password)) {
        strength.innerHTML = '<div class="text-success">Strong password</div>';
      } else {
        strength.innerHTML = '<div class="text-danger">Password must contain at least 8 characters, including uppercase, lowercase, numbers, and special characters</div>';
      }
    });
  </script>

</body>

</html>
