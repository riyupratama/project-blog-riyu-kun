@extends('layouts.app')
@section('title', 'About Page')

@section('content')
    <div class="row">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
            <h2>About Blog Riyu-kun</h2>
            <hr>
            <p>Riyu-kun's blog is the my first project. Where in this project I created a website for the first time using Laravel.</p>
            <p>If you find many things that are less efficient, bugs, or things that are not commonly used in creating this blog, this is purely from my thoughts and logic.</p>
            <p>The main purpose of creating this blog is so that I can smoothly use Laravel features such as model, controller, factory, seeder, auth, CRUD, and relational between models.</p>
            <p>So what you see in this blog means that I can make it smoothly both in memory and in understanding</p>
            <p>Thank you for reading until the end.</p>
             ∧,,,∧<br>
            (  ̳• · • ̳) <br>
            /    づ♡ I love you
        </div>
    </div>
@endsection