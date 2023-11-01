<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register page</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 outline-1 pt-5">
                <div class="card-header">
                    <h2>Register</h2>
                </div>
                @if (Session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session('success') }}
                    <a href="login">Login</a>
                  </div>
                @endif
                <form class="px-4 py-3" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="John Smith">
                    </div>
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" placeholder="JohnSmith">
                    </div>
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <span>You have account? </span><a href="login">Login</a>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>