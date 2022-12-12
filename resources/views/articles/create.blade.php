@extends('templates.base')
@section('title', 'Buat Artikel Baru')
@section('content')
  <section>
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" name="title" id="title" placeholder="Judul Artikel">
      <input type="text" name="slug" id="slug" placeholder="Slug">
      <input type="hidden" name="content" id="content" class="hidden">
      <input type="file" name="image" id="image" accept="image/*" class="">
      <trix-editor input="content"></trix-editor>
      <button type="submit">Submit</button>
    </form>
  </section>
@endsection