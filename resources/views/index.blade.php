@extends('templates.base')
@section('title', 'Home')
@section('content')
@include('components.navbar')
  <section class="container my-32 mx-auto p-5">
    <div class="flex w-full justify-around flex-wrap">
      <a href="{{ route('product.list') }}" class="group w-80 h-80 shadow-lg hover:shadow-2xl transition-all duration-300 bg-white rounded-xl flex justify-center items-center overflow-hidden">
        <p class="text-3xl font-bold text-gray-700 group-hover:scale-150 transition-all duration-300 group-hover:-rotate-3">Daftar Produk</p>
      </a>
      <a href="{{ route('post.list') }}" class="group w-80 h-80 shadow-lg hover:shadow-2xl transition-all duration-300 bg-white rounded-xl flex justify-center items-center overflow-hidden">
        <p class="text-3xl font-bold text-gray-700 group-hover:scale-150 transition-all duration-300 group-hover:-rotate-3">Daftar Artikel</p>
      </a>
    </div>
  </section>
@endsection