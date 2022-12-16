@extends('layout.home')
@section('content')
<div class="container bg-light p-4">
    @if(auth()->user()->level == "user")
        <div class="card text-center p-2">
                <h4>Welcome kids</h4>
            </div>
        <div class="container bg-info mt-5  ">
            <div class="row justify-content-between text-center p-4">
                @foreach ($data_post as $item)
                <div class="card col-6 mt-2" style="width: 18rem;">
                    <img src="{{ asset('pict_product/'.$item->picture) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->desc }}</p>
                        <a href="#" class="btn btn-primary">{{ $item->price }}</a>
                    </div>
                </div>
                @endforeach
            </div>     
                
        </div>
    @endif
    @if(auth()->user()->level == "owner")

        <div class="card p-3" style="display: flex">
            <h2>Welcome, Owner {{ Auth::user()->name }}</h2>
            <div class="time" style="display: flex; gap: 10px">
               <p>{{ date('l, d F, Y') }}</p>
               <p id="clock"></p>
            </div>
        </div>
        <div class=" row col-12 mx-auto mt-5">
            <div class="col-3">
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="h4 text-center text-white">Post</h3>
                    </div>
                   <div class="card-body text-center">
                     <ul class="list-group list-group-flush">
                        <label for="" style="font-size: 46px"><i class="bi bi-stack"></i></label>
                        <li class="list-group-item"><a href="{{ route('crud-post') }}">Create, Edit, Delete</a></li>
                    </ul>
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h3 class="h4 text-center text-white">Option</h3>
                    </div>
                   <div class="card-body text-center">
                     <ul class="list-group list-group-flush">
                        <label for="" style="font-size: 46px"><i class="bi bi-gear-fill"></i></label>
                        <li class="list-group-item"><a href="">View, Delete User</a></li>
                    </ul>
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                        <div class="card-body">
                     <i class="nav-link disabled">Coming Soon</i>
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card disabled">
                        <div class="card-body">
                     <i class="nav-link disabled">Coming Soon</i>
                   </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection


