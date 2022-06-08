@extends('layouts.main')

@section('container')

 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">

            <h1 class="mb-5">{{ $post->title}}</h1>
            <p>by {{ $post->author->name }} in <a href="/categories/"{{ $post->author->slug }}>{{ $post->category->name }}</a></p>


            {!! $post->body !!}
 <p></p>

  <a class="btn btn-primary" href="/posts">back to posts</a>

         </div>

     </div>

 </div>




@endsection

