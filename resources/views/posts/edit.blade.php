@extends('posts.layouts.app')
@section('title','Edit Page')

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('posts.update', $post['id']) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="mb-3">
                <img class="w-50 mb-2" src="/storage/posts/{{ $post['image'] }}" alt=""><br>
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="" name="image">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input title"  name="title" value="{{ $post['title'] }}">
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                <select class="form-select" id="inputGroupSelect01" name="category">
                  <option value="{{ $post->category }}" selected>{{ $post->category }}</option>
                  <option value="HTML">HTML</option>
                  <option value="CSS">CSS</option>
                  <option value="JAVASCRIPT">JAVASCRIPT</option>
                  <option value="LARAVEL">LARAVEL</option>
                  <option value="PHP">PHP</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Type in here</label>
                <textarea class="form-control" name="content" rows="5" name="content" placeholder="Masukkan Konten Post">{{ $post['content'] }}</textarea>
              </div>
              <a href="/posts" class="btn btn-dark me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
              <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Save</button>
        </form>
    </div>
</div>
@endsection
