<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('posts.index')}}"><span style="font-size:40px">Branding</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active h3">
        <a class="nav-link" href="{{route('posts.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item h3">
        <a class="nav-link" href="http://localhost/forum/public/about">About</a>
      </li>
    </ul>
  </div>
  <div>
    <ul class="nav navbar-nav navbar-right">
      <a href="{{route('posts.create')}}" class="btn btn-primary">Ask A Question</a>
      @guest
      <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
      <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
    @endguest
  </ul>
</div>
</nav>
<br>