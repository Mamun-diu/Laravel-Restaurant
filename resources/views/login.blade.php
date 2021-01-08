@extends('layout')
@section('content')
    <div>
        <h1 class="display-4 text-center">User Login page</h1>
        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3">
                <form action="" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control mb-2" type="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="passowrd" class="form-control mb-2" type="password" name="password" placeholder="Enter Password">
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
