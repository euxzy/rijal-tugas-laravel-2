<div class="flex items-center bg-white w-[47%] gap-5 p-3 rounded-xl">
  <div class="w-72 h-48 rounded-xl overflow-hidden flex justify-center items-center">
    <img src="{{ asset('images/posts/' . $article->image) }}" alt="{{ $article->title }}" class="w-full">
  </div>
  <div class="flex-1">
    <a href="{{ route('post.show', $article->slug) }}" class="inline-block font-medium text-xl mb-4">{{ $article->title }}</a>
    <p class="text-sm">{{ strip_tags(substr($article->content, 0, 100), '...') }}</p>
  </div>
</div>