<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="{{ asset('js/clock.js') }}"></script>
</head>
  <body onload="realtimeClock()">
      <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link text-white">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
                    </li>
                 </ul>
                </div>
            </div>
      </nav>

<div class="container bg-light p-4">
    @if(auth()->user()->level == "user")
        <div class="card text-center p-2">
                <h4>Welcome kids</h4>
            </div>
    @endif
    @if(auth()->user()->level == "admin")

        <div class="card p-3" style="display: flex">
            <h2>Welcome, Admin {{ Auth::user()->name }}</h2>
            <div class="time" style="display: flex; gap: 10px">
               <p>{{ date('l, d F, Y') }}</p>
               <p id="clock"></p>
            </div>
        </div>
        <div class=" row col-12 mx-auto">
            <div class="col-3">
                <div class="card">
                   <div class="card-body">
                     <button class="btn btn-primary"></button>
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                     <button class="btn btn-primary"></button>
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                        <div class="card-body">
                     <button class="btn btn-primary"></button>
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                        <div class="card-body">
                     <button class="btn btn-primary"></button>
                   </div>
                </div>
            </div>
        </div>
    @endif
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
