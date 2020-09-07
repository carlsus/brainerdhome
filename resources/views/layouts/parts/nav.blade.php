<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand logo" href="{{ url('/') }}">Sellerzz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            
            <form class="form-inline my-2 my-lg-0">
                <label for="search" class=" mr-3">Find your home: </label>
                <input class="form-control mr-sm-2" type="search" placeholder="Enter city, state, zip">
            </form>

            <li class="nav-item"><a href="{{ url('seller') }}" class="nav-link">Sell Your Home</a></li>
            @guest
                <li class="nav-item"><a href="{{ route('buyer.search.index') }}" class="nav-link">Purchase Your Home</a></li>
            @endguest
            @auth
                @if (Auth::user()->user_type === 'buyer')
                    <li class="nav-item"><a href="#" class="nav-link">Notifications Buyer</a></li>
                @endif
                @if (Auth::user()->user_type === 'seller')
                    <li class="nav-item"><a href="#" class="nav-link">Notifications Seller</a></li>
                @endif
            @endauth
            
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                
                @guest
                    <a class="nav-link btn login" href="{{ url('login') }}">Login</a>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->firstname ?? 'empty'}} <span class="caret"></span>
                        
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
            </li>
        </ul>
        </div>
    </div>
</nav>
<!-- END nav -->