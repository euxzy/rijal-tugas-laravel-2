@extends('templates.product')
@section('title', 'Tambah Produk')
@section('content')
  <section class="max-w-[700px] mx-auto">
    <a href="{{ route('product.list') }}" class="mt-12 inline-block mb-4 bg-green-600 text-white px-4 py-2 rounded-lg">Kembali Ke Daftar Produk</a>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col gap-5 px-5 py-6 rounded-xl border border-gray-400">
        <h1 class="w-max mx-auto text-4xl font-bold mb-2 text-gray-700">Tambah Produk</h1>
        <input type="text" name="name" id="name" placeholder="Nama Produk" class="px-3 py-2 rounded-lg outline-none focus:outline-1 focus:outline-gray-400 transition-all duration-300">
        <input type="number" name="price" id="price" placeholder="Harga" class="border px-3 py-2 rounded-lg outline-none focus:outline-1 focus:outline-gray-400 transition-all duration-300">
        <input type="number" name="stock" id="stock" placeholder="Stok" class="border px-3 py-2 rounded-lg outline-none focus:outline-1 focus:outline-gray-400 transition-all duration-300">
        <textarea name="description" id="description" placeholder="Deskripsi..." class="border px-3 py-2 h-40 rounded-lg outline-none focus:outline-1 focus:outline-gray-400 transition-all duration-300"></textarea>
        <input type="file" name="image" id="image" accept="image/*" class="bg-white cursor-pointer file:cursor-pointer rounded-lg file:hover:bg-green-500 file:bg-green-700 file:px-3 file:py-2 file:border-none file:text-green-100 file:mr-4 text-gray-500 font-medium file:transition-all file:duration-300">
        <button type="submit" class="px-3 py-2 rounded-lg text-white bg-green-600">Submit</button>
      </div>
    </form>
  </section>
@endsection