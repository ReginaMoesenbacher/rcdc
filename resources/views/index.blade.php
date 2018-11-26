@extends("layouts.app")

@section("content")

    <div class="background">
        <h2>Drink don't think !</h2>


    </div>



    <section class="info">
        <h3>Mix your own Coktail !</h3>
        <p>Log in, then you can start mixing your own individual Cocktail. Add all the ingredients and you'll see if you have the talent for a barkeeper.</p>
    </section>


        @foreach($drinks as $key => $drink)
            <p>{{ $drink["strCategory"] }}</p>
        @endforeach





@endsection