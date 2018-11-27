<a href="{{ url('/') }}"><img src="../images/logo.svg" alt="Logo"></a>
<a href="#">Mixit</a>

@auth
    <a href="{{ url('/home') }}">Home</a>
@else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
    @endif
@endauth

