<div class="position-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <span class="fw-bold pb-3">Populer Post</span>
            {{-- @foreach ($posts as $post)    
            <div class="row mb-2">
                <div class="col-4">
                    <img src="/storage/posts/{{ $post->image }}" alt="" class="w-100 mt-2">
                </div>
                <div class="col-8">
                    <a href="">{{ $post->title }}</a>
                </div>
            </div>
            @endforeach --}}
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Messages
            </a>
        </li>
    </ul>
</div>