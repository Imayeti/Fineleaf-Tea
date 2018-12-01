
    <div id="app">
        <nav class="navbar navbar-expand-md  navbar-light bg-light ">

                <a href="/"><i class="fas fa-leaf smfas ml-4 ">&nbsp </i><span class="mr-4">FineLeaf</span></a>

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


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav  ml-auto">

                        <!-- Authentication Links -->
                        <li>
                          <a href="/shopping_cart" class="vertical2"><i class="fas fa-shopping-cart mr-4  "></i></a>
                        </li>
                        @guest
                        <a class="my-auto" href="{{ route('login') }}"><p class="small-txt pb-0 mb-0 pr-3 text-secondary" >Login</p></a>


                        @if (Route::has('register'))
                            <a class="my-auto" href="{{ route('register') }}" ><p class="small-txt pb-0 mb-0 text-secondary">Register</p></a>
                        @endif

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
                                    <a class="dropdown-item" href="/orders">
                                      My Orders
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









          <nav class="navbar navbar-expand-md  fixed-top nav-appear skinny-nav navbar-light bg-light ">

                  <a href="/"><i class="fas fa-leaf smfas ml-4 ">&nbsp </i><span class="mr-4">FineLeaf</span></a>

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


                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav  ml-auto">

                          <!-- Authentication Links -->
                          <li>
                            <a href="/shopping_cart" class="vertical"><i class="fas fa-shopping-cart mr-4  "></i></a>
                          </li>
                          @guest

                                  <a class="my-auto" href="{{ route('login') }}"><p class="small-txt pb-0 mb-0 pr-3 text-secondary" >Login</p></a>


                                  @if (Route::has('register'))
                                      <a class="my-auto" href="{{ route('register') }}" ><p class="small-txt pb-0 mb-0 text-secondary">Register</p></a>
                                  @endif

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
                                      <a class="dropdown-item" href="/orders">
                                        My Orders
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
