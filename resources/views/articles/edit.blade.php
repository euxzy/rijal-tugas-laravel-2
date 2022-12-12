@extends('templates.base')
@section('title', 'Edit Post')
@section('content')
  <section>
    <form action="{{ route('post.update', $article->id) }}" method="post" enctype="multipart/form-data">
      @method('put')
      @csrf
      <input type="text" name="title" id="title" placeholder="Judul Artikel" value="{{ $article->title }}">
      <input type="text" name="slug" id="slug" placeholder="Slug" value="{{ $article->slug }}">
      <input type="file" name="image" id="image" accept="image/*" class="">
      <input type="hidden" name="content" id="content" class="hidden">
      <trix-editor input="content">{!! $article->content !!}</trix-editor>
      <button type="submit">Submit</button>
    </form>
  </section>
@endsection