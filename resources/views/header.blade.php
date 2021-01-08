<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Restaurant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/list') }}">List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ URL::to('/add') }}">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Search</a>
          </li>

          @if(Session::get('user'))
          <li class="nav-item ">
            <a class="nav-link " href="#">{{ Session::get('user') }}</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ URL::to('logout') }}">Logout</a>
          </li>
          @else
            <li class="nav-item">
                <a class="nav-link " href="{{ URL::to('/login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ URL::to('/register') }}">Register</a>
            </li>
          @endif
        </ul>

      </div>
    </div>
  </nav>
