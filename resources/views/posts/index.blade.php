<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/4ca5a8c4a1.js" crossorigin="anonymous"></script>

    <title>All Post!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <form action="{{ route('logout') }}" method="post" class="mt-4 d-flex align-items-cneter">
            @csrf
            <button class="btn btn-dark">Logout</button>
          </form>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end">
          <span class="me-3 fw-bolder">Halo, {{ Auth::user()->name }}</span>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-6">
          <h1 class="text-center mt-3">Post Database!</h1>
          {{-- search bar --}}
          <form class="d-flex justify-content-center" action="" method="get">
            {{-- <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-primary" type="submit">Search</button> --}}
            <div class="input-group my-3">
              <input type="text" class="form-control" placeholder="Keyword" aria-label="Recipient's keyword" aria-describedby="basic-addon2">
              <button class="input-group-text btn btn-primary" id="basic-addon2">Search</button>
            </div>
          </form>
        </div>
      </div>
        {{-- alert success action --}}
        @if (Session()->has('success'))
        <div class="w-100 d-flex justify-content-end">
          <div class="alert alert-success d-flex align-items-center alert-dismissible fade show w-lg-25" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              {{ Session::get('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
        @endif

        <div class="row mt-5">
            <div class="col-12 mt-5">
                <a class="btn btn-success float-end me-5 mt-5" href="{{ route('posts.create') }}">New Post</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col" class="img">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col" class="">Content</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse ($posts as $key => $post)
                        <tr>
                        <th scope="row">{{ $posts->firstItem() + $key }}</th>
                        <td class="text-center td-img"><img class="w-100" src="/storage/posts/{{ $post['image'] }}" alt=""></td>
                        <td>{{ $post['title'] }}</td>
                        <td>{!!  Str::limit($post->content, 100)  !!}</td>
                        <td class="action">
                            {{-- show button --}}
                            <a class="btn btn-primary" href="{{ route('posts.show', $post['id']) }}"><i class="fa-solid fa-eye"></i></a>
                            {{-- edit button --}}
                            <a class=" btn btn-warning text-white" href="/posts/{{ $post['id'] }}/edit"><i class="fa-regular fa-pen-to-square"></i></a>
                            {{-- delete button --}}
                            <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        </tr>
                        @empty
                        <div class="aler alert-danger mt-0 p-2">Data belum ada!</div>
                        @endforelse
                        
                    </tbody>
                  </table>
                  
                  <div class="row pb-4">
                    <div class="col-6">
                      Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }} entires
                    </div>
                    <div class="col-6 d-flex justify-content-end pe-5">
                      {{ $posts->links() }}
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>