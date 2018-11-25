
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light ">

                <a href="/"><i class="fas fa-leaf ml-3"></i></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tea
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/tea?type=greentea">Green Tea</a>
                              <a class="dropdown-item" href="/tea?type=blacktea">Black Tea</a>
                              <a class="dropdown-item" href="/tea?type=puerhtea">Puerh Tea</a>

                              <a class="dropdown-item" href="/tea?type=whitetea">White Tea</a>
                            </div>

                      </li>
                      <li class="nav-item ml-3">
                        <a class="nav-link" href="/teaware">Teaware</a>
                      </li>

                      <li class="nav-item ml-3">
                        <a class="nav-link" href="#">About</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav  ml-auto">
                        <!-- Authentication Links -->
                      <a href="/shopping_cart"><i class="fas fa-shopping-cart mr-3 ml-5"></i></a>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><p class="small-txt ">Login</p></a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}" ><p class="small-txt ">Register</p></a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
          </div>
