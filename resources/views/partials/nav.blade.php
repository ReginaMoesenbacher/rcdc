<a href="{{ url('/') }}"><img src="{{asset('images/logo.svg')}}" alt="Logo"></a>
<a href="{{ url('/mixit') }}">Mixit</a>


@auth
@else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
    @endif


@endauth


@guest
@else
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">

            @if (auth()->check() && auth()->user()->role ==  null)
                <a href="{{route("profile")}}" class="dropdown-item">Profile</a>
                <a href="{{route("cart.index")}}" class="dropdown-item">Shopping Cart</a>
            @endif

            @if (auth()->check() && auth()->user()->role ==  1)
                <a href="{{route("admin.customer")}}" class="dropdown-item">Backend</a>
            @endif


            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@endguest