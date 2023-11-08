@extends('posts.layouts.app')
@section('title', 'Dashboard')

  @section('content')
  <div class="row d-flex justify-content-center">
    <div class="col-lg-6">
      <h1 class="text-center mt-3">Post Database!</h1>
      {{-- search bar --}}
      <form class="d-flex justify-content-center" action="" method="get">
        <div class="input-group my-3">
          <input type="text" class="form-control" placeholder="Keyword" aria-label="Recipient's keyword" aria-describedby="basic-addon2" name="search">
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
                    <a class="btn btn-primary" href="read/{{ $post->slug }}"><i class="fa-solid fa-eye"></i></a>
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
                <div class="aler alert-danger mt-0 p-2">Upss post not found.</div>
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
  @endsection