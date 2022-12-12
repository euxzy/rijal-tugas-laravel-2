@extends('templates.base')
@section('title', $article->title)
@section('content')
  <section>
    <h1>{{ $article->title }}</h1>
    <div><img src="{{ asset('images/posts/' . $article->image) }}" alt="{{ $article->title }}"></div>
    <p>{!! $article->content !!}</p>
  </section>
@endsection