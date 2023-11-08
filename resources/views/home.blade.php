@extends('layouts.app')
@section('title','Home Page')

      @section('content')
      <div id="content" class="pt-1">
          <div class="row">
            @if (app('request')->input('search'))
              {{-- section latest posts --}}
              <h3 class="ms-5">Search : {{ app('request')->input('search') }}</h3>
            @elseIf (app('request')->input('category'))
              {{-- section latest posts --}}
              <h3 class="ms-5">Category : {{ app('request')->input('category') }}</h3>
            @elseIf (app('request')->input('page'))
              {{-- section latest posts --}}
              <h3 class="ms-5">Page : {{ app('request')->input('page') }}</h3>
            @else
              {{-- section selected posts --}}
              <section class="selected-post mb-4">
                <img src="storage/posts/{{ $posts[0]->image }}" alt="" class="selected-post-image w-100">
                <span class="category-article">{{ $posts[0]->category }}</span>
                <div class="content-latest-post text-center">
                  <a href="read/{{ $posts[0]->slug }}" class="selected-post-title fs-2 text-center text-white">{{ $posts[0]->title }}</a>
                  <div class="selected-post-author">Ditulis oleh : <a href="/user/{{ $posts[0]->user->username }}" class="ms-2 text-white">{{ $posts[0]->user->name }}</a></div>
                </div>
              </section>
              {{-- section latest posts --}}
              <h3 class="ms-5">Latest Posts</h3>
            @endif
            @foreach ($posts as $post)
            <div class="col-lg-4 px-5 mb-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="storage/posts/{{ $post->image }}" class="card-img-top" alt="...">
                    <span class="category-articles">{{ $post->category }}</span>
                    <div class="card-body">
                      <div class="card-title m-0"><a href="read/{{ $post->slug }}" class="card-title fw-bolder">{{ $post->title }}</a></div>
                      <span class="card-author"><i class="fa-sharp fa-solid fa-user"></i><a href="/user/{{ $post->user->username }}" class="ms-2">{{ $post->user->name }}</a></span>
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