@extends('layouts.main')


@Section('container')

<div class="row justify-content-center">
    <div class="col-md-5">

        @if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        @if (session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <main class="form-signin">
          <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

            <form action="/login" method="post">
                @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
                <label for="Password">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small class="d-block text-center mt-3">Not registed? <a href="/register">register Now!</a> </small>
          </main>



    </div>
</div>



@endsection
