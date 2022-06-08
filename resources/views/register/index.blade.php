@extends('layouts.main')


@Section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">

          <h1 class="h3 mb-3 fw-normal text-center">Regristasion form</h1>

            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  id="name" placeholder="name" required value="{{ old ('name') }}">
                    <label for="name">name</label>
                @error('name')
                <div class="invalid-feedback">
                 nama tidak boleh kosong
                </div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old ('username') }}">
                    <label for="username">username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        nama tidak boleh kosong
                    </div>
                    @enderror
                     </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old ('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                 email tidak boleh kosong
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" required>
                <label for="Password">Password</label>
                @error('password')
              <div class="invalid-feedback">
                  password minimal 5
              </div>
              @enderror
              </div>


              <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-5">Already registered<a href="/login"> Login</a> </small>
          </main>



    </div>
</div>



@endsection
