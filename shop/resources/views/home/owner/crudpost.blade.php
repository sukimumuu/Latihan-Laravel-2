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
            <div class="card-header bg-secondary text-white">
               <div class="h3">Create New Post Product</div>
            </div>
            <div class="card-body">
                  <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="" id="headingTwo">
                                <button class="btn btn-success collapsed ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Add New Product +
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Product Title</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                                        </div>
                                        <div class="input-group mb-3" style="width: 15%">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" name="price">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Picture of Product</label>
                                            <input class="form-control" type="file" id="formFile" name="picture">
                                        </div>
                                        <div class="button" style="margin-left: 85%; display:flexbox; gap: 10px;">
                                            <button class="btn btn-danger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Close
                                            </button>
                                            <button class="btn btn-success" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Publish
                                            </button>
                                        </div>               
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>
            </div>  
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-secondary text-white">
               <div class="h3">View Post Product</div>
            </div>
            <div class="card-body">
                  <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="" id="headingTwo">
                                <button class="btn btn-success collapsed ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    View Post
                                </button>
                            </h2>
                            <div id="collapse" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-info table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                 </div>
            </div>  
        </div>
    </div>
</div>
</div>
@endsection
