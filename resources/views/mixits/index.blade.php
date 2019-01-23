@extends('layouts.app')

@section('content')



    <div class="sidebar_cocktails position-fixed">
        <aside class="sidebar position-absolute">
            <img class="nav__toggle" src="{{asset('images/left-arrow.png')}}" alt="Zurück">
            <div class="nav-item">
                <form method="post" class="squaredFour">
                    @csrf
                    @for ($i = 0; $i < count($ingredients['drinks']); $i++)
                        <label class="text" for="ingredient-{{$i}}">
                            <input type="checkbox" id="ingredient-{{$i}}" name="ingredient-{{$i}}">
                            <span class="{{ $i }}">{{$ingredients['drinks'][$i]['strIngredient1']}}</span>
                        </label>
                    @endfor
                </form>
            </div>
        </aside>
    </div>
    ¡
    <div class="mixit d-flex justify-content-center align-items-center flex-column container" id="bodymovin">
        {{--<img src="{{asset('images/animation/Cocktail.svg')}}" alt="">--}}
    </div>


    <aside class="sidebar_cart position-absolute text-center">
        <img class="nav__toggle" src="{{asset('images/right-arrow.png')}}" alt="Ingredients">
        <h3>Let's start and mix your own Cocktail! </h3>
        <div>
            <img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">
        </div>


        <form id="buyMixit" method="post" action="buy_mixit">
            @csrf

            @auth
                <section class="cart_ingredients d-flex flex-column"></section>
                <button type="submit" id="buy" class="btn">Buy</button>
            @endauth
        </form>

        @guest
            <button type="submit" class="btn" onclick="window.location.href='{{ route('register') }}'">Register</button>
            <button type="submit" class="btn" onclick="window.location.href='{{ route('login') }}'">Login</button>
        @endguest


    </aside>


@endsection
