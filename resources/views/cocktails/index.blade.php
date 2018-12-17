@extends('layouts.app')



@section('content')

    <aside class="sidebar">
        <ul class="nav flex-column">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link active"
                       href="{{ route("index", ["categories" => $category->slug]) }}">{{$category->category_string}}</a>
                </li>
            @endforeach
        </ul>
    </aside>

    <section id="#home" class="cover">
        <form class="flex-form">
            <label for="search">
                <i class="ion-search"></i>
            </label>
            <input id="search" type="search" placeholder="Find your favourite Cocktail">
            <input type="submit" value="search">
        </form>
    </section>



    <section class="container details mr-0">
        <div class="row mt-5">
            @foreach ($data['results'] as $drink)
                <div class="col-md-4">
                    <div class="link-1 card mb-4 snip1556">

                        <form action="{{route("show", ["drink_id" => $drink["idDrink"]])}}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $drink["idDrink"] }}">
                            <button type="submit">{{ $drink["strDrink"] }}</button>
                        </form>

                        <img src="{{$drink["strDrinkThumb"]}}" alt="{{ $drink["strDrink"] }}">
                    </div>

                </div>

            @endforeach

            {{--Show pagination links--}}
            <span>{!! $data['results']->render() !!}</span>
        </div>
    </section>

@endsection