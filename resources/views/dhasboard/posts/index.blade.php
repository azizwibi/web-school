@extends('dhasboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">my posts</h1>
  </div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>

@endif


  <div class="table-responsive">
      <a href="/dhasboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">title</th>
          <th scope="col">category</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>

@foreach ($posts as $post)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->category->name }}</td>
    <td>
        <a href="/dhasboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
        <a href="/dhasboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
        <form action="/dhasboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="badge bg-danger border-0" onclick="return confirm('anda akin mau menghapus?')"><span data-feather="x-circle"></span></button>
        </form>
    </td>
  </tr>
@endforeach
      </tbody>
    </table>
  </div>

@endsection
