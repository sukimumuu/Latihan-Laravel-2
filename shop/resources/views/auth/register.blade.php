@extends('layout.main')
@section('content')
    <div class="container bg-light p-5">
        <div class="card text-center p-5">
                <h4>Register</h4>
            <div class="card-body mx-auto mt-2 p-2" style="width: 600px;">
                <form action="{{ route('register-user') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3 text-center">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-secondary mt-5" style="float: right">Register</button>
                    <a class="mt-5" style="float: left" href="{{ route('login') }}">If you have an account, Login Here</a>
                </form>
            </div>
        </div>
    </div>
@endsection


