<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/4ca5a8c4a1.js" crossorigin="anonymous"></script>

    {{-- css custom --}}
    <link rel="stylesheet" href="/assets/css/style.css">
  
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light ps-lg-5">
        @include('posts.layouts.navbar')
    </nav>

    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>


    <footer class="bg-light mb-0">
        @include('posts.layouts.footer')
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
  </body>
</html>