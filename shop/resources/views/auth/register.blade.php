<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container bg-light p-5">
    <div class="card text-center p-5">
            <h4>Register</h4>
        <div class="card-body mx-auto mt-2 p-2" style="width: 600px;">
            <form action="" method="post">
                <div class="form-floating mb-3 text-center">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                  <button type="submit" class="btn btn-secondary mt-5" style="float: right">Register</button>
                  <a class="mt-5" style="float: left" href="{{ route('login') }}">If you have an account, Login Here</a>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
