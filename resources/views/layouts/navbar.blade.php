<nav class="navbar navbar-expand-md navbar-light" style="background-color: #ffffff;">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav">
      <li class="nav-item active h3">
        <a class="nav-link" href="{{ route('posts.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
    </ul>
  </div>
  <div class="mx-auto order-0">
    <a class="navbar-brand mx-auto" href="{{route('posts.index')}}">Laravel Forum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="{{route('posts.create')}}" class="btn btn-primary">Ask A Question</a>
      </li>
      @guest
      <li class="nav-item h3">
        <a class="nav-link" href="#">Log In</a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="register">Register</a>
      </li>
      @else
      <li class="nav-item h3">
        <a class="nav-link" href="#">Username</a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="#">Log Out</a>
      </li>
      @endguest
    </ul>
  </div>
</nav>
<br>
