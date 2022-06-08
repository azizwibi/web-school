@extends('dhasboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

           <h1 class="mb-3">{{ $post->title}}</h1>

<a href="/dhasboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>back to my posts</a>
<a href="/dhasboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>edit</a>
<form action="/dhasboard/posts/{{ $post->slug }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('anda akin mau menghapus?')"><span data-feather="x-circle"></span>delete</button>
    </form>

<p></p>

<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">

{!! $post->body !!}

    </div>

</div>
@endsection
