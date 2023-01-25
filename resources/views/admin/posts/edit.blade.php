@extends('layouts.app')
@section('content')
   <div>
     <h1>Modifica il post: {{$post->title}}</h1>
   </div>

   <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="my-3">
         <label class="form-label" for="">Titolo</label>
         <input value="{{ $post->title }}" class="form-control" type="text" name="title">
    </div>
    @error('title')
      <div class="alert alert-danger">
        {{ $message }}
      </div>
    @enderror

    <div class="my-3">
        <label class="form-label" for="">Body</label>
        <textarea class="form-control" type="text" name="body">{{ $post->body }}</textarea>
   </div>
    @error('body')
      <div class="alert alert-danger">
        {{ $message }}
      </div>
    @enderror

   <button type="submit" class="btn btn-primary">Modifica</button>
   </form>
@endsection
