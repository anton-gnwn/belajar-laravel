@extends('layouts.main') {{-- Menghubungkan template --}}

@section('container')
    <h1 class="mb-5"> Post Category : {{ $category }}</h1>
    {{-- Ini Halaman Posts --}}
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By. <a href="#" class="text-decoration-none">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excrept }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach


@endsection
