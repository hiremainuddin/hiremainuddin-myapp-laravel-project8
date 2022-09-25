<nav class="navbar navbar-expand-custom navbar-mainbg">
  <a class="navbar-brand navbar-logo" href="#"><img class="img-fluid" src="{{ asset('frontend/img/logo.svg')}}" alt=""></a>
  <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('/')}}"><i class="fas fa-house-user"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('/'.'#service') ? 'active' : '' }}" href="{{route('/')}}#service"><i class="far fa-clone"></i>Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('all-projects') ? 'active' : '' }}" href="{{route('all-projects')}}"><i class="far fa-calendar-alt"></i>Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('/'.'#galleries') ? 'active' : '' }}" href="{{route('/')}}#galleries"><i class="fa fa-camera-retro"></i>Galleries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('/'.'#testimonials') ? 'active' : '' }}" href="{{route('/')}}#testimonials"><i class="fa fa-users"></i>They say</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{route('about')}}"><i class="far fa-user"></i>About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{route('contact')}}"><i class="far fa-envelope"></i>Contact</a>
      </li>
    </ul>
  </div>
</nav>