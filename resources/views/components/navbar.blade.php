<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('welcome')}}">UpCostruction</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-danger"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-danger" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @guest
              
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('article.create')}}">Crea articolo</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('form')}}">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('register')}}">register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('login')}}">login</a>
          </li>
          @else
          {{-- @if (Auth::user()) --}}
          <li class="nav-item">
            <p class="nav-link text-white">Benvenuto {{Auth::user()->name}}</p>
          </li>
          {{-- @endif --}}
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
          </li>
          <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
            @csrf
          </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
