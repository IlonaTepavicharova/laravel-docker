@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ Storage::url($post->preview_image) }}" alt="blog post">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{$post->category->title}}</p>
                        <form action="{{route('post.like.store', $post->id)}}" method="post">
                            @csrf
                            @auth()
                                <span>{{$post->liked_users_count}}</span>
                                @if(auth()->user()->likedPost->contains($post->id))

                                    <button type="submit" style="border: 0; background: 0"><i class="fas fa-heart" style="color: #af164e"></i></button>
                                @else
                                    <button type="submit" style="border: 0; background: 0"><i class="fas fa-heart" style="color: #9ca3af"></i></button>

                                @endif
                                @endauth
                        </form>
                    </div>
                    <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
                @endforeach
            </div>
        </section>

</main>

@endsection
