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


                    @for($i = 0; $i < count($orders); $i++)

                        <tr>

                            <td>{{($orders[$i]->user->name)}}</td>
                            <td>
                                <ul>
                                    <li>{{$orders[$i]->ingredients}}</li>
                                </ul>
                            </td>
                            <td>
                                <form method="get" action="{{ route('admin.edit_order', $orders[$i]->id) }}"
                                      autocomplete="off">

                                    @csrf
                                    @method('put')

                                    <button type="submit" class="btn btn-info">Edit</button>

                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.destroy_order', $orders[$i]->id) }}">

                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>
                        {{--@endforeach--}}

                    @endfor
                    </tbody>
                </table>
            </div>


        </div>
    </div>

@endsection