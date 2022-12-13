@extends('templates.base')
@section('title', 'Semua Post')
@section('content')
@include('components.navbar')
  <section class="container my-28">
    <div class="flex justify-between">
      @foreach ($articles as $article)
      @include('components.post-card', $article)
      @endforeach
    </div>
  </section>
@endsection