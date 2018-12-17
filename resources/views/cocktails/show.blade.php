@extends('layouts.app')

@section('content')

    <aside class="show_sidebar">

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
                <div class="card">

                    {{--{{dd($drinks_detail['drinks'][0]['strDrink'])}}--}}
                    <h3>{{$drinks_detail['drinks'][0]['strDrink']}}</h3>
                    <p>{{$drinks_detail['drinks'][0]['strInstructions']}}</p>

                </div>
            </div>
        </div>
    </section>

@endsection