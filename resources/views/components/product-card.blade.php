<div class="w-96 bg-white p-4 rounded-lg shadow-lg">
  <div class="w-full h-72 overflow-hidden rounded-lg flex items-center justify-center bg-slate-200 mb-4">
    @if (!file_exists(public_path('image/' . $product->image)))
      <h1 class="text-center font-semibold text-5xl text-gray-700">{{ $product->name }}</h1>
    @else
      <img src="{{ asset('image/'. $product->image) }}" alt="{{ $product->name }}" class="w-full scale-150">
    @endif
  </div>
  <div class="flex justify-between items-center mb-3">
    <div>
      <p class="font-semibold text-lg text-gray-800">{{ $product->name }}</p>
      <p class="opacity-70">{{ $product->price }}</p>
    </div>
    <div class="min-w-[65px]">
      <p class="text-gray-700">Stock :</p>
      <p class="font-medium text-gray-800 text-right">{{ $product->stock }}</p>
    </div>
  </div>
  <div class="mb-4 text-gray-900">{{ $product->description }}</div>
  <div class="flex gap-4">
    <a href="{{ route('product.edit', $product->id) }}" class="inline-block mb-4 bg-green-600 text-white px-4 py-2 rounded-lg">Edit</a>
    <a href="{{ route('product.delete', $product->id) }}" class="inline-block mb-4 bg-red-600 text-white px-4 py-2 rounded-lg">Hapus</a>
  </div>
</div>