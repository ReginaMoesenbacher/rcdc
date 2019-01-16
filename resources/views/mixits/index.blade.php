@extends('layouts.app')

@section('content')


    <img class="nav__toggle" src="{{asset('images/right-arrow.png')}}" alt="Ingredients">
    <aside class="sidebar">
        <img class="nav__toggle" src="{{asset('images/left-arrow.png')}}" alt="Zurück">
        <div class="nav-item">
            <form action="" method="post" class="squaredFour">
                @csrf
                @for ($i = 0; $i < count($ingredients['drinks']); $i++)
                    <label class="text" for="ingredient-{{$i}}">
                        <input type="checkbox" id="ingredient-{{$i}}">
                        <span class="{{ $i }}">{{$ingredients['drinks'][$i]['strIngredient1']}}</span>
                    </label>
                @endfor
            </form>
        </div>
    </aside>

    <section class="mixit container">

        <img src="{{ asset('images/bottle.svg') }}" alt="Bottle">

    </section>

    <aside class="sidebar_cart">
        <h3>Let's start and mix your own Cocktail! </h3>
        <div>
            <img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">
        </div>



        <form id="buyMixit" method="post" action="buyMixit">
            @csrf

            @auth
                <section class="cart_ingredients"></section>
                <button type="submit" id="buy" class="btn">Buy</button>
            @endauth
        </form>

            @guest
                <button type="submit" class="btn" onclick="window.location.href='{{ route('register') }}'">Register</button>
                <button type="submit" class="btn" onclick="window.location.href='{{ route('login') }}'">Login</button>
            @endguest



    </aside>


@endsection
