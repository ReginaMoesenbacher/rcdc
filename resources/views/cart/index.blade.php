@extends('layouts.app')

@section('content')
    <section class="cart">
        <form method="POST" action="cart">
            <aside class="sidebar position-absolute sidebar_cart_ingredient">
                <h3 class="text-center">Your Cocktail</h3>
                <div id="conditionList">


                    @foreach($carts as $cart)
                        <div>
                            <img class="delete" src="{{asset('images/delete.svg')}}" alt="delete">
                            <input type="text" value="{{$cart}}" name="ingredient:{{$cart}}">
                        </div>

                    @endforeach
                </div>

            </aside>

            <section class="mixit d-flex justify-content-center align-items-center flex-column container ">

                <h3 class="text-center">Contact</h3>

                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fullname *') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" value="{{ $users->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address *') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $users->email }}" required>

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
                        <input id="city" type="text" class="form-control{{ $errors->has('City') ? ' is-invalid' : '' }}"
                               name="city" value="{{ $users->city }}" required>

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
                        <input id="zipcode" type="text"
                               class="form-control{{ $errors->has('Zip Code') ? ' is-invalid' : '' }}" name="zipcode"
                               value="{{ $users->zipcode }}" required>

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
                        <input id="address" type="text"
                               class="form-control{{ $errors->has('Address') ? ' is-invalid' : '' }}" name="address"
                               value="{{ $users->address }}" required>

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
                        <input id="state" type="text"
                               class="form-control{{ $errors->has('State') ? ' is-invalid' : '' }}" name="state"
                               value="{{ $users->state }}" required>

                        @if ($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="tel"
                           class="col-md-4 col-form-label text-md-right">{{ __('Telephone Number *') }}</label>

                    <div class="col-md-6">
                        <input id="tel" type="text"
                               class="form-control{{ $errors->has('Number') ? ' is-invalid' : '' }}" name="tel"
                               value="{{ $users->tel }}" required>

                        @if ($errors->has('tel'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

            </section>

            <aside class="sidebar_cart position-absolute text-center">
                <h3 class="text-center">Currency </h3>
                <label class="text currency" for="creditcart">
                    <input type="checkbox" id="creditcart">
                    <span> Creditcart </span>
                </label>

                <div class="creditcart ">
                    <label class="text" for="cart_id">
                        <span> Cart id *</span> <br>
                        <input type="text" id="cart_id" name="card_id">
                    </label>


                    <label class="text" for="card_brand">
                        <span> Cart brand *</span>
                        <input type="text" id="card_brand" name="card_brand">
                    </label>

                    {{--<label class="text" for="card_last_four">--}}
                        {{--<span> Cart last four *</span>--}}
                        {{--<input type="text" id="card_last_four" name="card_last_four">--}}
                    {{--</label>--}}

                    <label class="text" for="trial_ends_at">
                        <span> Trial ends at *</span>
                        <input type="text" id="trial_ends_at" name="trial_ends_at">
                    </label>
                </div>
                <label class="text" for="directebanking">
                    <input name="directebanking" type="checkbox" id="directebanking">
                    <a href="https://www.sofort.com/payment/users/login?SOFUEB=sk4tvfo5ocb34744j1sakglo73"><span>  Directebanking </span></a>
                </label>

                <br>
                <button type="submit" id="currency" class="btn">Buy now for 30$</button>
            </aside>
        </form>
    </section>


@endsection
