<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex justify-content-center align-middle">
    <div class="circle">
      
    </div>
    <div class="align-content-center justify-content-center h-100">
        <div class="container p-5">
            <img src="{{ asset('images/LOGO.png') }}" class="img-fluid mb-4" alt="">
            <div class="content">
                <header> 
                    <h2 class="fw-bold">Login</h1>
                    <p class="fs-6">Login untuk masuk mis Paud KB AL-HUSNA</p>
                </header>
                <form method="POST" action="{{ route('authenticate') }}">
                  @csrf
                    <div class="form-floating mb-3 mt-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                        <label for="floatingInput">Username</label>
                      </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn-lg mt-2" style="background-color: #F26419;">Log In</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>