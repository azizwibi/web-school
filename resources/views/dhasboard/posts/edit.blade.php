@extends('dhasboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">edit post</h1>
  </div>

  <div class="col-lg-8">
    <form method="POST" action="/dhasboard/posts/{{ $post->slug }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control @error('title') is-invalid  @enderror" id="title" name="title" required autofocus value="{{ old('title',$post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="Slug" class="form-label">slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="Slug" name="Slug" required value="{{ old ('Slug',$post->slug) }}">
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
                @if (old('category_id',$post->category_id) == $category->id)
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
            <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
            <trix-editor input="body"></trix-editor>
          </div>
     <button type="submit" name="submit" class="btn btn-primary" value="submit">update post</button>
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


{{--
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab a nobis omnis incidunt impedit quam, laboriosam modi placeat eos tempore adipisci iusto neque nisi blanditiis, nihil officiis illo? Velit quibusdam amet, tempora vero quam fugiat laboriosam deleniti quisquam. Nisi, odio! Eos ipsam placeat veniam aspernatur cum sunt omnis ratione vel consequatur esse dolores aperiam totam temporibus, atque nisi perferendis ducimus reiciendis porro quaerat maxime? Ipsa cum eligendi autem. Ipsum pariatur ipsam sint vero est iusto id expedita veniam. Rerum asperiores iusto quidem vitae sunt velit illum ad quo magni voluptas labore expedita nobis nam eum quaerat architecto alias facere doloremque reiciendis facilis, molestiae officiis possimus.

 Sed laudantium inventore omnis repellat? Culpa inventore aliquid, consequatur voluptates deleniti sit velit odio temporibus consequuntur, eveniet atque fugiat harum quae mollitia, amet optio praesentium excepturi animi dolores officia. Quidem tempore saepe culpa optio perspiciatis ea ex soluta. Soluta, animi molestias neque aspernatur totam sequi porro id unde cum obcaecati voluptates hic dignissimos dolorum dolorem enim dicta quia repellat eveniet dolores, maxime mollitia cumque excepturi est quis? Perspiciatis fugiat rerum sequi atque, veniam inventore et blanditiis accusantium facilis eveniet.

 Provident consectetur blanditiis cumque nam explicabo doloremque, quo, veniam voluptatem quos esse nobis aliquam ullam accusantium. --}}
