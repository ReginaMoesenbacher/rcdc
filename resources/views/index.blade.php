@extends("layouts.app")

@section("content")

    <div class="background">
        <h2>Drink don't think !</h2>
    </div>



    <section class="info">
        <h3>Mix your own Cocktail !</h3>
        <img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">
        <p>Log in, then you can start mixing your own individual Cocktail.<br/> Add all the ingredients and you'll see
            if you have the talent for a barkeeper.</p>
        <p>Search for or favourite Cocktail !</p>

        <section id="#home" class="cover">
            <form class="flex-form">
                <label for="search">
                    <i class="ion-search"></i>
                </label>
                <input id="search"  type="search" placeholder="Find your favourite Cocktail">
                <input type="submit" value="search">
            </form>
        </section>

    </section>


    <section class="cocktail_category">
        <div class="container">
            <div class="col">

                @php($count = 0)
                @foreach($drinks as $drink)

                    <div class="row">


                        <div data-aos="fade-right"
                             data-aos-offset="300"
                             data-aos-easing="ease-in-sine">
                            <h3>
                                <a href="{{ route("index", ["category" => $drink->slug]) }}">{{$drink->category_string}}</a>
                            </h3>
                            <img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">
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