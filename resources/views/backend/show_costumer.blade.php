@extends("layouts.app")

@section("content")
    <div class="container-fluid">
        <div class="row">

            @include("backend.partials")

            <div class="container backend_container">

                <h3>Costumer: {{$costumer->name}}</h3>

                <form action="{{route('admin.update_costumer', $costumer->id)}}" method="post">

                    @csrf
                    <div class="form-group">

                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $costumer->name }}" name="name">

                    </div>

                    <div class="form-group">

                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $costumer->email }}" name="email">

                    </div>

                    <div class="form-group">

                        <label for="tel">Telephone Number</label>
                        <input type="text" class="form-control" id="tel" value="{{ $costumer->tel }}" name="tel">

                    </div>

                    <div class="form-group">

                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" value="{{ $costumer->city }}" name="city">

                    </div>

                    <div class="form-group">

                        <label for="zipcode">Zipcode</label>
                        <input type="text" class="form-control" id="zipcode" value="{{ $costumer->zipcode }}" name="zipcode">

                    </div>

                    <div class="form-group">

                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" value="{{ $costumer->state }}" name="state">

                    </div>

                    <div class="form-group">

                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" value="{{ $costumer->address }}" name="address">

                    </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Edit
                            </button>
                        </div>


                </form>

            </div>
        </div>
    </div>

@endsection