<section class="bg-white/50 backdrop-blur-sm fixed w-full shadow-md top-0 left-0">
  <nav class="flex container mx-auto justify-between h-20 items-center">
    <div class="flex gap-20 items-center">
      <a href="{{ route('home') }}" class="font-bold text-2xl">BrandName</a>
      <ul class="flex gap-10 items-center font-medium">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('post.list') }}">Post</a></li>
        <li><a href="{{ route('product.list') }}">Produk</a></li>
      </ul>
    </div>
    <ul class="flex gap-10 font-medium">
      <li><a href="{{ route('post.create') }}">Tambah Post</a></li>
      <li><a href="{{ route('product.add') }}">Tambah Produk</a></li>
    </ul>
  </nav>
</section>