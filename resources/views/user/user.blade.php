<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
          <div class="card">
            <form method="POST" action="{{ route('user.update') }}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <h1 class="text-center mb-4">Welcome to your Dashboard</h1>
                @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <div class="form-group">
                  <input type="text"  name="id" class="form-control" value="{{ $data->id }}" hidden>
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{ $data->name }}" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{ $data->email }}" required>
                </div>
                <!-- Add other fields as needed -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update Details</button>
                  <a href="{{ url('/logout') }}" class="btn btn-danger ml-2">Logout</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
