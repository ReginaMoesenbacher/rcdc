@extends('layouts.app')

@section('content')

    <img class="nav__toggle" src="{{asset('images/right-arrow.png')}}" alt="Ingredients">
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
        <form class="flex-form" method="get" {{--action="{{ route('search') }}"--}} action="/search">
            <label for="search">
                <i class="ion-search"></i>
            </label>
            <input id="search" type="search" placeholder="Find your favourite Cocktail" name="searchrterm">
            <button type="submit"> Search</button>
        </form>
    </section>




    <section class="container show_section mr-0 mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center flex-wrap">
                <img src="{{$drinks_detail['drinks'][0]['strDrinkThumb']}}"
                     alt="{{$drinks_detail['drinks'][0]['strDrink']}}" data-aos="zoom-in-up">
                <div class="card">

                    {{--{{dd($drinks_detail['drinks'][0]['strDrinkThumb'])}}--}}
                    <h3>{{$drinks_detail['drinks'][0]['strDrink']}}</h3>
                    <p>{{$drinks_detail['drinks'][0]['strInstructions']}}</p>


                </div>
            </div>
        </div>
    </section>

@endsection