@extends('templates.product')
@section('title', 'List Product')
@section('content')
  <section class="w-[1360px] mx-auto bg-slate-300">
    <div class="flex justify-between">
      <div>No</div>
      <div>Nama</div>
      <div>Harga</div>
      <div>Stok</div>
      <div>Deskripsi</div>
      <div>Gambar</div>
      <div>Aksi</div>
    </div>

    @foreach ($products as $product)
      <div class="flex justify-between">
        <div>{{ $loop->iteration }}</div>
        <div>{{ $product->name }}</div>
        <div>{{ $product->price }}</div>
        <div>{{ $product->stok }}</div>
        <div>{{ $product->description }}</div>
        <div>
          <img src="{{ asset('image/'. $product->image) }}" alt="">
        </div>
        <div>
          <a href="{{ route('product.edit', $product->id) }}">Edit</a>
          <a href="{{ route('product.delete', $product->id) }}">Hapus</a>
        </div>
      </div>
    @endforeach
  </section>
@endsection