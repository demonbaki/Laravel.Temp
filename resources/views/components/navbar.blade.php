<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('welcome')}}">UpCostruction</a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-danger" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('article.create')}}">Crea Articolo</a>
          </li>
          @guest   
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('form')}}">Domandaci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="{{route('login')}}">Login</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Prodotti
            </a>
            <ul class="dropdown-menu text-danger">
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item " href="{{route('product.create')}}">Crea un Prodotto</a></li>
              <li><a class="dropdown-item " href="{{route('product.index')}}">I miei Prodotti</a></li>
            </ul>
          </li>
       
          {{-- @if (Auth::user()) --}}
          <li class="nav-item">
            <p class="nav-link text-white">Benvenuto {{Auth::user()->name}}</p>
          </li>
          {{-- @endif --}}
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu text-danger">
              <li><hr class="dropdown-divider"></li>
          @foreach ($categories as $category)
          <li><a class="dropdown-item " href="{{route('product.category' , $category)}}">{{$category->name}}</a></li>
         
          @endforeach
              
            </ul>
          </li>
        </ul>
          <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
            @csrf
          </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
