@extends('layouts.app')

@section('content')

    {{-- Show results--}}
    <div class="container details">
        <div class="row">
            @foreach ($results as $result)
                <div class="col">
                    <div class="link-1">

                        <ul>
                            <li>
                                <form action="{{route("show", ["drink_id" => $result["idDrink"]])}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $result["idDrink"] }}">
                                    <button type="submit">{{ $result["strDrink"] }}</button>

                                </form>
                                {{--{{dd($result["idDrink"])}}--}}
                            </li>
                        </ul>
                    </div>

                </div>
            @endforeach

            {{-- Show pagination links--}}
            {!! $results->render() !!}
        </div>
    </div>

@endsection
