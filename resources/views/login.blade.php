<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login page</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 outline-1 pt-5">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                @if (Session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session('error') }}
                  </div>
                @endif
                <form class="px-4 py-3" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                          Remember me
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <span>No have account? </span><a href="register">Register</a>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 