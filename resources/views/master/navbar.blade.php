<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{asset('img/logo.pngg')}} " alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('plat.create')}}">Ajouter</a>
        </li>
       
        @if(auth()->check())
          <li class="nav-item">
              <a class="nav-link" href="{{route('profile.show')}}">
               {{auth()->user()->name}}
                </a>
           </li>
           @else
           <li class="nav-item">
              <a class="nav-link" href="{{url('/register')}}">
                  Inscription
                </a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">
                  Connexion
                </a>
           </li>
           @endif
        <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Menu</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallary</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#blogs">Blogs</a>
                  </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>                                                                                                                                                                                                                                                                        