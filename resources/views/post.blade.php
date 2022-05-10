@extends('layout')

@section('content')
<section class="blog">
    <article>
        <h1>{{ $post->title }}</h1>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Ga terug!</a>
</section>
@endsection
