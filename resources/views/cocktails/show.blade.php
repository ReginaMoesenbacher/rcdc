@extends('layouts.app')

@section('content')

    <img class="nav__toggle" src="{{asset('images/right-arrow.png')}}" alt="Ingredients">
    <aside class="show_sidebar">
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

    <section class="cover details-search">

        <form class="flex-form">
            <label for="from">
                <i class="ion-search"></i>
            </label>
            <input type="search" placeholder="Find your favourite Cocktail">
            <input type="submit" value="search">
        </form>

    </section>




    <section class="container show_section mr-0 mt-5">
        <div class="row">
            <div class="col">
                <img src="{{$drinks_detail['drinks'][0]['strDrinkThumb']}}" alt="{{$drinks_detail['drinks'][0]['strDrink']}}" data-aos="zoom-in-up">
                <div class="card">

                    {{--{{dd($drinks_detail['drinks'][0]['strDrinkThumb'])}}--}}
                    <h3>{{$drinks_detail['drinks'][0]['strDrink']}}</h3>
                    <p>{{$drinks_detail['drinks'][0]['strInstructions']}}</p>


                </div>
            </div>
        </div>
    </section>

@endsection