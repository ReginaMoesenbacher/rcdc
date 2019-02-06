@extends("layouts.app")

@section("content")


    <div class="container-fluid">
        <div class="row">

            @include("backend.partials")

            <div class="container backend_container">

                <h3>Orders</h3>

                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Ingredients</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>


                            <td>{{($order->user->name)}}</td>
                            <td>
                                @foreach ($ingredients as $ingredient)
                                    <ul>
                                        <li>{{$ingredient}}</li>
                                    </ul>
                                @endforeach
                            </td>
                            <td>
                                <form method="get" action="{{ route('admin.edit_order', $order->id) }}"
                                      autocomplete="off">

                                    @csrf
                                    @method('put')

                                    <button type="submit" class="btn btn-info">Edit</button>

                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.destroy_order', $order->id) }}">

                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>


        </div>
    </div>

@endsection