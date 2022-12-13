@extends('templates.base')
@section('title', 'Semua Post')
@section('content')
@include('components.navbar')
  <section>
    @foreach ($articles as $article)
      <h1>{{ $article->title }}</h1>
      <a href="{{ route('post.show', $article->slug) }}">Detail</a>
    @endforeach
  </section>
@endsection