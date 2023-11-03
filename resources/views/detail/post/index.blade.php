@extends('layouts.app')

@section('content')
    <img src="/storage/posts/{{ $post->image }}" alt="" class="w-100 detail-post-img">
    <h1 class="text-center detail-post-title">{{ $post->title }}</h1>
    <p class="text-center">Ditulis oleh : <a href="">{{ $post->user->name }}</a></p>
    {!! $post->content !!}
@endsection