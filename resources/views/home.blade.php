@extends('layouts.app')

      @section('content')
      <div id="content" class="pt-1">
          <div class="row">
              {{-- section selected posts --}}
              <section class="selected-post">
                <img src="storage/posts/{{ $posts[0]->image }}" alt="" class="selected-post-image w-100">
                <div class="content-latest-post">
                  <div class="selected-post-title fs-2 text-center">{{ $posts[0]->title }}</div>
                  <div class="selected-post-author text-center">Ditulis oleh : <a href="" class="ms-2 text-white">{{ $posts[0]->user->name }}</a></div>
                </div>
              </section>
              {{-- section latest posts --}}
              <h3 class="ms-5 mt-5">Latest Posts</h3>
              @foreach ($posts as $post)
              <div class="col-lg-4 px-5 mb-3 d-flex justify-content-center">
                  <div class="card" style="width: 18rem;">
                      <img src="storage/posts/{{ $post->image }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="card-title m-0"><a href="read/{{ $post->slug }}" class="card-title fw-bolder">{{ $post->title }}</a></div>
                        <span class="card-author"><i class="fa-sharp fa-solid fa-user"></i><a href="" class="ms-2">{{ $post->user->name }}</a></span>
                        <p class="card-text mt-3">{!!  Str::limit($post->content, 100)  !!}</p>
                        <a href="read/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
              @endforeach
              <div class="paginate d-flex justify-content-center my-2">
                  {{ $posts->links() }}
              </div>
          </div>
      </div>
      @endsection
            {{-- sidebar --}}
            <div class="col-md-3">

            </div>
        </div>
        
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>