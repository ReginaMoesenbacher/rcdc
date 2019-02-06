@extends('layouts.app')



@section('content')

    <img class="nav__toggle" src="{{asset('images/right-arrow.png')}}" alt="Ingredients">
    {{--<button class="nav__toggle toggle__button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
        {{--Cocktail Categories--}}
    {{--</button>--}}
    <div class="sidebar_cocktails position-fixed">
    <aside class="sidebar position-absolute">
        <img class="nav__toggle" src="{{asset('images/left-arrow.png')}}" alt="Zurück">
        <ul class="nav flex-column">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link active"
                       href="{{ route("index", ["categories" => $category->slug]) }}">{{$category->category_string}}</a>
                </li>
            @endforeach
        </ul>
    </aside>
    </div>
    <section class="cover details-search">
        <form class="flex-form" method="get" action="/search">
            <label for="search">
                <i class="ion-search"></i>
            </label>
            <input id="search"  type="search" placeholder="Find your favourite Cocktail" name="searchrterm">
            <button type="submit"> Search </button>
        </form>
    </section>


    <section class="container container_cocktails">

        <div class="grid d-flex flex-wrap justify-content-between">
            @foreach ($data['results'] as $drink)

                <figure class="effect-phoebe position-relative text-center">
                    <img class="position-relative d-block" src="{{$drink["strDrinkThumb"]}}" alt="{{ $drink["strDrink"] }}"/>
                    <figcaption>
                        <h3>{{ $drink["strDrink"] }}</h3>
                        <form action="{{route("show", ["drink_id" => $drink["idDrink"]])}}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $drink["idDrink"] }}">
                        <button class="position-relative" type="submit"></button>
                        </form>
                    </figcaption>
                </figure>

                @endforeach

                {{--Show pagination links--}}
                <span>{!! $data['results']->render() !!}</span>
        </div>
    </section>

@endsection