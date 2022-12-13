@extends('templates.base')
@section('title', $article->title)
@section('content')
@include('components.navbar')
  <section class="container my-32">
    <h1 class="text-4xl font-bold text-gray-700 mb-10">{{ $article->title }}</h1>
    <div class="w-full h-96 overflow-hidden flex items-center justify-center mb-3">
      <img src="{{ asset('images/posts/' . $article->image) }}" alt="{{ $article->title }}" class="w-full">
    </div>
    <p class="mb-8 w-full text-right">{{ $article->updated_at }}</p>
    <p class="text-gray-900">{!! $article->content !!}</p>

    <a href="{{ route('post.list') }}" class="inline-block mt-20 bg-green-600 text-white px-4 py-2 rounded-lg font-bold">Lihat post lain</a>
  </section>
@endsection