@extends("layouts.app")

@section("content")

    <div class="background">
        <h2>Drink don't think !</h2>
    </div>



    <section class="info d-flex flex-column justify-content-center lign-items-center text-center">
        <h3>Mix your own Cocktail !</h3>
        <img class="text-center lign-items-center" src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">
        <p>Log in, then you can start mixing your own individual Cocktail.<br/> Add all the ingredients and you'll see
            if you have the talent for a barkeeper.</p>
        <p>Search for your favourite Cocktail !</p>

        <section id="home" class="cover details-search">
            <form class="flex-form" method="get" action="/search">
                <label for="search">
                    <i class="ion-search"></i>
                </label>
                <input id="search"  type="search" placeholder="Find your favourite Cocktail" name="searchterm" value="{{ old('searchterm') }}">
                <button type="submit"> Search </button>
            </form>
        </section>

    </section>


    <section class="cocktail_category">
        <div class="container">
            <div class="col">

                @php($count = 0)
                @foreach($drinks as $drink)

                    <div class="row">


                        <div class="d-flex flex-column text-center align-items-center justify-content-center" data-aos="fade-right"
                             data-aos-offset="300"
                             data-aos-easing="ease-in-sine">
                            <h3 class="position-relative">
                                <a href="{{ route("index", ["category" => $drink->slug]) }}">{{$drink->category_string}}</a>
                            </h3>
                            <a href="{{ route("index", ["category" => $drink->slug]) }}"><img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail"></a>
                            <p>{{$img[$count]->category_desc}}</p>
                        </div>

                            <img data-aos="zoom-in-up" src="{{ $img[$count]->category_img}}" alt="{{ $img[$count]->category}}">


                        @php(++$count)
                    </div>


                @endforeach
            </div>
        </div>




    </section>







@endsection