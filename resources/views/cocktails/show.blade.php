@extends('layouts.app')

@section('content')

    {{-- Show results--}}
    <div class="container details">
        <div class="row">
            @foreach ($results as $result)
                <div class="col">

                    <a href=""><span>{{ $result["strDrink"] }}</span></a>
                    {{--<p>{{ $result["strDrink"] }}</p>--}}


                </div>
            @endforeach

            {{-- Show pagination links--}}
            {!! $results->render() !!}
        </div>
    </div>

@endsection
