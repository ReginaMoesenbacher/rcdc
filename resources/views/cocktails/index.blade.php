@extends('layouts.app')



@section('content')
    <aside>
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



    {{-- Show results--}}

    {{--<section class="coverflow" id="player">--}}
    {{--<div class="coverflow-wrap" >--}}
    {{--@foreach ($drinks as $drink)--}}
    {{--<div class="coverflow-tray ">--}}
    {{--<div class="coverflow-cell">--}}

    {{--<img src="{{ $drink["strDrinkThumb"] }}" alt="">--}}
    {{--<h2>{{ $drink["strDrink"] }}</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--</section>--}}





    <section class="container details mr-0">
        <div class="row">
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