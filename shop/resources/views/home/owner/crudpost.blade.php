@extends('layout.home')
@section('content')
<div class="container bg-light p-4">
    <div class="card p-3" style="display: flex">
            <h2>Welcome, Owner {{ Auth::user()->name }}</h2>
            <div class="time" style="display: flex; gap: 10px">
               <p>{{ date('l, d F, Y') }}</p>
               <p id="clock"></p>
            </div>
        </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning">
               <div class="h3">Create Post</div>
            </div>
            <div class="card-body">
                    <button class="btn btn-success">Add New Post +</button>
                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" id="" rows="3" t></textarea>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">Price</label>
                        <input type="text" class="form-control" id="">
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection
