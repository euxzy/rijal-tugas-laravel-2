@extends('templates.base')
@section('title', 'Edit Post')
@section('content')
@include('components.navbar')
  <section class="container my-28">
    <div class="w-full flex justify-center mb-12">
      <h1 class="text-4xl font-bold text-gray-700">Edit Post</h1>
    </div>
    <form action="{{ route('post.update', $article->id) }}" method="post" enctype="multipart/form-data" class="w-11/12 mx-auto">
      @method('put')
      @csrf
      <div class="flex justify-between w-full mb-8">
        <input type="text" name="title" id="title" placeholder="Judul Artikel" value="{{ $article->title }}" class="w-[47%] px-3 py-2 rounded-lg outline-none focus:outline-1 focus:outline-gray-400 transition-all duration-300" required>
        <input type="text" name="slug" id="slug" placeholder="Slug" value="{{ $article->slug }}" class="w-[47%] px-3 py-2 rounded-lg outline-none focus:outline-1 focus:outline-gray-400 transition-all duration-300" required>
      </div>
      <input type="hidden" name="content" id="content" class="hidden">
      <input type="file" name="image" id="image" accept="image/*"  class="w-full mb-8 bg-white cursor-pointer file:cursor-pointer rounded-lg file:hover:bg-green-500 file:bg-green-700 file:px-3 file:py-2 file:border-none file:text-green-100 file:mr-4 text-gray-500 font-medium file:transition-all file:duration-300">
      <trix-editor input="content"  class="mb-8 w-full min-h-[300px] bg-white cursor-pointer file:cursor-pointer rounded-lg file:hover:bg-green-500 file:bg-green-700 file:px-3 file:py-2 file:border-none file:text-green-100 file:mr-4 text-gray-500 font-medium file:transition-all file:duration-300">{!! $article->content !!}</trix-editor>
      <div class="flex gap-5">
        <button type="submit"  class="px-3 py-2 rounded-lg text-white bg-green-600 hover:bg-opacity-80 hover:-translate-y-1 transition-all duration-300">Simpan Perubahan</button>
        <a href="{{ route('post.show', $article->slug) }}" class="inline-block bg-blue-400 text-white px-4 py-2 rounded-lg font-bold hover:bg-opacity-80 hover:-translate-y-1 transition-all duration-300">Lihar Post</a>
      </div>
    </form>
  </section>
@endsection