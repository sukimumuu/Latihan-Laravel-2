@extends('layout.main')
@section('content')
    <div class="container bg-light">
        <div class="card-header h2 text-center mt-3">
            Register
        </div>
        <form action="{{ route('register-user') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 ">
                    <div class="mb-3 mt-5 col-lg-4 col-md-6 col-sm-6 col-7 mx-auto">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" name="name">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3 col-lg-4 col-md-6 col-sm-6 col-7 mx-auto">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" name="email">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3 col-lg-4 col-md-6 col-sm-6 col-7 mx-auto">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-sm" id="exampleFormControlInput1" name="password">
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-11 col-lg-9 col-md-11 col-sm-11">
                <div class="mb-3 col-xl-4  col-lg-3 col-md-4 col-sm-4 col-7 ms-auto">
                    <button type="submit" class="btn btn-secondary text-white">Register</button>
                </div>
            </div>
        </form>
       </div>
@endsection


