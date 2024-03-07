<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Forgot Password</h5>
            <p class="card-text">Please enter your email address below and we'll send you instructions on how to reset your password.</p>
            <form action="{{ route('forget.password.post') }}" method="post">
 @csrf

              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" id="email_address" name="email" class="form-control" required>
                @if ($errors->has('email'))

                                      <span class="text-danger">{{ $errors->first('email') }}</span>

                                  @endif
                                  
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
