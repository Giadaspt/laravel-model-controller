<header class="container my-3">
  <ul class="nav">
    <li class="nav-item nav-pills">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#">Action</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Comedy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Horror & Thriller</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Fantasy</a>
    </li>
  </ul>
</header>