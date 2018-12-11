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




    <div class="container">
        <div class="col">
            <div class="row">


                <h1>bitch please</h1>
            </div>
        </div>
    </div>

@endsection