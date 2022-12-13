@extends('templates.base')
@section('title', 'Semua Post')
@section('content')
@include('components.navbar')
  <section class="container my-28">
    <div class="w-full flex justify-center mb-10">
      <h1 class="text-4xl font-bold text-gray-700">Semua Post</h1>
    </div>
    <div class="flex justify-between flex-wrap gap-10">
      @foreach ($articles as $article)
      @include('components.post-card', $article)
      @endforeach
    </div>
  </section>
@endsection