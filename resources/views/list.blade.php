@extends('layout')
@section('content')
    <div>
        <h1 class="display-4 text-center border-bottom">List Of Restaurants</h1>
        @if(Session::get('status'))
            <div class="alert alert-primary">
                {{ Session::get('status') }}
            </div>
        @endif
        <table class="table table-dark table-striped ">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>

            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ URL::to('/edit/'.$item->id) }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{ URL::to('/delete/'.$item->id) }}">Del</a>
                </td>

            </tr>

            @endforeach

        </table>

    </div>
@endsection
