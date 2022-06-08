@extends('dhasboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">create new post</h1>
  </div>

  <div class="col-lg-8">
    <form method="POST" action="/dhasboard/posts" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control @error('title') is-invalid  @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="Slug" class="form-label">slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="Slug" name="Slug" required value="{{ old ('Slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category )
                @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">body</label>
            @error('body')
         <p class='text-danger'> {{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
          </div>
     <button type="submit" name="submit" class="btn btn-primary" value="submit">create post</button>
    </form>
  </div>

  {{-- <script>
const title = document.querySelector('#title');
const Slug = document.querySelector('#Slug');

title.addEventListener('change' function() {
    fetch('/dhasboard/posts/cekSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => Slug.value = data.Slug)
});
  </script> --}}

@endsection


