@extends('layout')
@section('content')
    <div>
        <h1 class="display-4 text-center">Update Restaurants</h1>

        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3">
                <form action="{{ URL::to('/update/'.$data->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control mb-2 border-top-0 " type="text" name="name" value="{{ $data->name }}" placeholder="Enter Restaurant Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control mb-2" type="email" name="email" value="{{ $data->email }}" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" class="form-control mb-2" name="address" placeholder="Enter Address"  rows="4">{{ $data->address }}</textarea>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Update</button>
                </form>
            </div>
        </div>


    </div>
@endsection
