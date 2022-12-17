@extends('layout.main')
@section('content')
       <div class="container bg-light">
        <div class="card-header h2 text-center mt-3">
            Login
        </div>
        <form action="{{ route('login-user') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 ">
                    <div class="mb-3 mt-5 col-lg-4 col-md-6 col-sm-7 col-7 mx-auto">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" name="name">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3 col-lg-4 col-md-6 col-sm-7 col-7 mx-auto">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-sm" id="exampleFormControlInput1" name="password">
                    </div>
                </div>
            </div>
            <div class="col-xl-11 col-lg-8 col-md-12 col-sm-9 col-9">
                <div class="mb-3 col-xl-4 col-lg-1 col-md-4 col-sm-5 col-5 ms-auto">
                    <button type="submit" class="btn btn-secondary text-white">Login</button>
                </div>
            </div>
        </form>
       </div>
@endsection
<script>

</script>


