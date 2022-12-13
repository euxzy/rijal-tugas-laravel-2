<a href="{{ route('post.show', $article->slug) }}" class="group flex items-center bg-white w-[95%] lg:w-[47%] gap-5 p-3 mx-auto rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
  <div class="w-48 h-32 lg:w-72 lg:h-48 rounded-xl overflow-hidden flex justify-center items-center">
    <img src="{{ asset('images/posts/' . $article->image) }}" alt="{{ $article->title }}" class="w-full group-hover:scale-125 transition-all duration-300">
  </div>
  <div class="flex-1">
    <p class="inline-block font-medium text-xl mb-4">{{ $article->title }}</p>
    <p class="text-sm">{{ strip_tags(substr($article->content, 0, 100) . '...') }}</p>
  </div>
</a>