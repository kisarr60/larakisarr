<header>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark static-top">
        <a class="navbar-brand" href="{{ route('root_path')}}">Larakisarr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link {{set_active_route('root_path')}}" href="{{ route('root_path')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{set_active_route('about_path')}}">
              <a class="nav-link" href="{{ route('about_path')}}">About</a>
            </li>
            <li class="nav-item {{set_active_route('artisan_path')}}">
              <a class="nav-link" href="/artisans">Artisans</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                <a class="dropdown-item" href="https://larajobs.com">LaraJobs</a>
                <a class="dropdown-item" href="https://laranews.com">Laravel news</a>
                <a class="dropdown-item" href="https://laratchat.com">LaraTchat</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <span class="navbar-text"> | IbouS@rr-Web  |</span>
          </ul>
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            
          </ul>
          
        </div>
      </nav>
  </div>
</header>