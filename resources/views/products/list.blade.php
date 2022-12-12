@extends('templates.product')
@section('title', 'List Product')
@section('content')
  <section class="w-[1360px] mx-auto mt-14 p-5 relative">
    <a href="{{ route('product.add') }}" class="absolute top-6 right-10 inline-block mb-4 bg-green-600 text-white px-4 py-2 rounded-lg">Tambah Produk</a>
    <h1 class="w-max mx-auto font-semibold text-4xl mb-10 text-gray-700">Daftar Produk</h1>
    <div class="flex gap-16 justify-center flex-wrap">
      @foreach ($products as $product)
        @include('components.product-card', $product)
      @endforeach
    </div>
  </section>
@endsection