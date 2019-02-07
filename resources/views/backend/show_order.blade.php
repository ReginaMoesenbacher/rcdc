@extends("layouts.app")

@section("content")
    <div class="container-fluid">
        <div class="row">

            @include("backend.partials")

            <div class="container backend_container">

                <form action="{{route('admin.update_order', $orders->id)}}" method="post">


                    @csrf
                    <div class="form-group">

                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $orders->user->name}}" name="name">

                    </div>

                    <div class="form-group">

                        <label for="ingredients">Ingredients</label>
                        <input type="text" class="form-control" id="ingredients" value="{{$orders->ingredients}}" name="ingredients">

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>


                </form>


            </div>
        </div>
    </div>

@endsection