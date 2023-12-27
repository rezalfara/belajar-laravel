@extends('layouts.main')

@section('container')
<article>
    <h1>{{ $post->title }}</h1>
    {!! $post->body !!}

    <br>
    <a href="/blog">Back to Posts</a>
</article>
@endsection
