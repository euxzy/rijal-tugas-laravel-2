@extends('templates.base')
@section('title', 'List Product')
@section('content')
@include('components.navbar')
  <section class="container my-24 mx-auto p-5 relative">
    <div class="absolute top-20 left-0 w-full flex justify-center">
      <a href="{{ route('product.add') }}" class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg mx-auto">Tambah Produk</a>
    </div>
    <h1 class="w-max mx-auto font-semibold text-4xl mb-24 text-gray-700">Daftar Produk</h1>
    <div class="flex gap-14 justify-center flex-wrap">
      @foreach ($products as $product)
        @include('components.product-card', $product)
      @endforeach
    </div>
  </section>
@endsection