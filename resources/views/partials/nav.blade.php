<a href="{{ url('/') }}"><img src="../images/logo.svg" alt="Logo"></a>
<a href="#">Mixit</a>

@auth
@else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
    @endif


@endauth


@guest
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a href="" class="dropdown-item">Profile</a>
            <a href="" class="dropdown-item">Shopping Cart</a>
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