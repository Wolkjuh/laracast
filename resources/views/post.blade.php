@extends('layout')

@section('content')
<section class="blog">
    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Ga terug!</a>
</section>
@endsection
