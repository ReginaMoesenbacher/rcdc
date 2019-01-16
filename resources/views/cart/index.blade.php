@extends('layouts.app')

@section('content')
<section class="cart">
    <aside class="sidebar sidebar_cart_ingredient">
        <h3>Your Cocktail</h3>
        <ul id="conditionList">
            @foreach($carts as $cart)
                <li>
                    <img class="delete" src="{{asset('images/delete.svg')}}" alt="delete">
                    <span> {{$cart}} </span>
                </li>
            @endforeach
        </ul>

    </aside>

    <section class="mixit container">

        <h3>Contact</h3>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fullname *') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $users->name }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address *') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $users->email }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City *') }}</label>

                <div class="col-md-6">
                    <input id="city" type="text" class="form-control{{ $errors->has('City') ? ' is-invalid' : '' }}" name="city" value="{{ $users->city }}" required>

                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code *') }}</label>

                <div class="col-md-6">
                    <input id="zipcode" type="text" class="form-control{{ $errors->has('Zip Code') ? ' is-invalid' : '' }}" name="zipcode" value="{{ $users->zipcode }}" required>

                    @if ($errors->has('zipcode'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address *') }}</label>

                <div class="col-md-6">
                    <input id="address" type="text" class="form-control{{ $errors->has('Address') ? ' is-invalid' : '' }}" name="address" value="{{ $users->address }}" required>

                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State *') }}</label>

                <div class="col-md-6">
                    <input id="state" type="text" class="form-control{{ $errors->has('State') ? ' is-invalid' : '' }}" name="state" value="{{ $users->state }}" required>

                    @if ($errors->has('state'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group row">
                <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Telephone Number *') }}</label>

                <div class="col-md-6">
                    <input id="tel" type="text" class="form-control{{ $errors->has('Number') ? ' is-invalid' : '' }}" name="tel" value="{{ $users->tel }}" required>

                    @if ($errors->has('tel'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        </form>
    </section>

    <aside class="sidebar_cart">
        <h3>Currency </h3>

    </aside>
</section>


@endsection
