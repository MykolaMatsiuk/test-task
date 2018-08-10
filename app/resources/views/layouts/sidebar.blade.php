<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="/pages" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Login Screens:</h6>
      @guest
        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
        <a class="dropdown-item" href="{{ route('password.request') }}">Forgot Password</a>
      @else
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      @endguest
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="404.html">404 Page</a>
      <a class="dropdown-item" href="blank.html">Blank Page</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/charts">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/tables">
      <i class="fas fa-map-marked-alt"></i>
      <span>Tables</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/">
      <i class="fas fa-fw fa-table"></i>
      <span>Map</span></a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="/pages" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Components</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Public components:</h6>
      <a class="dropdown-item" href="/components/navbar">Navbar</a>
      <a class="dropdown-item" href="/components/cards">Cards</a>
    </div>
  </li>
</ul>
