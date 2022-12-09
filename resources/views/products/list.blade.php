<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>List Produk</title>
</head>
<body>
  <section class="w-[1360px] mx-auto bg-slate-300">
    <div class="flex justify-between">
      <div>No</div>
      <div>Nama</div>
      <div>Harga</div>
      <div>Stok</div>
      <div>Deskripsi</div>
      <div>Gambar</div>
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
      </div>
    @endforeach
  </section>
</body>
</html>