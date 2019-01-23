@extends("layouts.app")

@section("content")


    <div class="container-fluid">
        <div class="row">

            @include("backend.partials")

            <div class="container backend_container">

                <h3>Customers</h3>

                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone Number</th>
                        <th scope="col">City</th>
                        <th scope="col">Zipcode</th>
                        <th scope="col">State</th>
                        <th scope="col">Address</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->tel}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->zipcode}}</td>
                            <td>{{$user->state}}</td>
                            <td>{{$user->address}}</td>

                            <td>

                                {{--<a href="{{ route('admin.edit_costumer', $user->id) }}" class="btn btn-info">Edit </a>--}}
                                <formA method="get" action="{{ route('admin.edit_costumer', $user->id) }}"
                                      autocomplete="off">

                                    @csrf
                                    @method('put')

                                    <button type="submit" class="btn btn-info">Edit</button>

                                </formA>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.destroy_costumer', $user->id) }}">

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