@extends('posts.layouts.app')
@section('title','Show article')

@section('content')
  <img class="w-100 mb-3" src="/storage/posts/{{ $post['image'] }}" alt="">
  <h1 class="mb-3">{{ $post['title'] }}</h1>
  <p>{!! $post['content'] !!}</p>
  
  <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-warning px-4">Edit</a>
  <a href="{{ route('posts.destroy', $post['id']) }}" class="btn btn-danger px-3">Delete</a>
@endsection