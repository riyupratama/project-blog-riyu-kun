@extends('layouts.app')
@section('title', $user->name)

@section('content')
    <h1 class="mb-3">Tentang Penulis</h1>
    <p class="fs-5">Name : <span>{{ $user->name }}</span></p>
    <p class="fs-5">Email : <span>{{ $user->email }}</span></p>
    <div class="row">
        <div class="col-lg-1">
            <p class="fs-5">Article:</p>
        </div>
        <div class="col-lg-11">
            @forelse ($user->post as $post)
                <ul>
                    <li>
                        <a href="">{{ $post->title }}</a>
                    </li>
                </ul>
            @empty
                <p class="alert alert-warning">This user hasn't posted anything yet</p>
            @endforelse
        </div>
    </div>
@endsection