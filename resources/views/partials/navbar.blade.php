
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">my school habits</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === "home" ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "about" ? 'active' : '' }}" href="/about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "posts" ? 'active' : '' }}" href="/posts">blog</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-auto">
@auth
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      welcome back, {{ auth()->user()->name }}
    </a>

    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="/dhasboard"><i class="bi bi-layout-text-window-reverse"></i>  my dhasboard</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item" class="bi bi-box-arrow-right"></i>  log out</button>
        </form>
      </li>
  </li>

@else

    <li class="nav-item">
        <a href="/login" class="nav-link" {{ $title === "login" ? 'active' : '' }}><i class="bi bi-box-arrow-in-right"></i> login</a>
    </li>

@endauth
</ul>

      </div>
    </div>
  </nav>
