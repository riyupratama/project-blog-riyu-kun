@extends('layouts.app')
@section('title', $post->title)

@section('content')
    <img src="/storage/posts/{{ $post->image }}" alt="" class="w-100 detail-post-img">
    <div class="detail-title-wrapper">
        <h1 class="text-center detail-post-title">{{ $post->title }}</h1>
    </div>
    <p class="text-center detail-post-author">Ditulis oleh : <a href="">{{ $post->user->name }}</a></p>
    <p class="detail-post-content">{!! $post->content !!}</p>
@endsection