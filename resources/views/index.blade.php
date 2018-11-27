@extends("layouts.app")

@section("content")

    <div class="background">
        <h2>Drink don't think !</h2>
    </div>



    <section class="info">
        <h3>Mix your own Coktail !</h3>
        <p>\</p>
        <p>Log in, then you can start mixing your own individual Cocktail.<br/> Add all the ingredients and you'll see
            if you have the talent for a barkeeper.</p>
    </section>


    {{--@foreach($drinks as $key => $drink)--}}
    {{--<p>{{ $drink["strCategory"] }}</p>--}}

    {{--<img src="{{$drink->category_img}}" alt="{{$drink->category}}">--}}
    {{--@endforeach--}}
    <section class="cocktail_category">
        <div class="container">
            <div class="col">

                @foreach($img as $key => $drink)

                    <div class="row">

                        <div>
                            <h3><a href="#">{{$drink->category}}</a></h3>
                            <img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">
                            <p>Log in, then you can start mixing your own individual Cocktail.<br/> Add all the ingredients and you'll see
                                if you have the talent for a barkeeper.</p>
                        </div>



                        <img src="{{$drink->category_img}}" alt="{{$drink->category}}">
                    </div>


                @endforeach
            </div>
        </div>





    </section>







@endsection