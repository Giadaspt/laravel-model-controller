<header class="container my-3">
  <ul class="nav">
    <li class="nav-item nav-pills">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item nav-pills">
      <a class="nav-link {{(Route::currentRouteName() === 'americanMovie') ? 'active' : ''}}" href="{{ route('americanMovie') }}">Film americani
      </a>
    </li>

  
  </ul>
</header>