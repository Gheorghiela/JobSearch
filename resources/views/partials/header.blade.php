<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
{{--            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>--}}
             <a href="{{ route('home') }}"><span style="font-size: 24px; font-weight: bold; color: white;">Job Search</span></a>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="" aria-labelledby="navbarDropdown">
                              <a class="" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
        </div>
    </div>
</header>
