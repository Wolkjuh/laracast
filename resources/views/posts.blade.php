@extends('layout')

@section('banner')
    <h1>Mijn blog</h1>
@endsection

@section('content')

    @foreach ($posts as $post)

    <article>
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>

        <div>
            {{ $post->exerpt }}
        </div>
    </article>

    @endforeach
@endsection
