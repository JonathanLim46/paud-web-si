<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/02c07b0853.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex justify-content-center align-middle">
    <div class="circle"></div>
    <div class="second-circle"></div>
    <div class="align-content-center justify-content-center h-100">
        <div class="container">
            <img src="{{ asset('images/page-layout/LOGO.png') }}" class="img-fluid mb-4" alt="">
            <div class="content">
                <header> 
                    <h2 class="fw-bold">Login</h1>
                    <p class="fs-6">Masuk kedalam akun Anda</p>
                </header>
                <form method="POST" action="{{ route('authenticate') }}">
                  @csrf
                    <div class="form-input mb-3 mt-4">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                      </div>
                    <div class="form-input mb-3 input-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        <i class="fa-solid fa-eye icon-toggle-password" id="toggle-password"></i>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn-lg mt-2">Log In</button>
                </form>
            </div>
        </div>
    </div>

    <script>
      const passwordField = document.getElementById("password");
      const togglePassword = document.getElementById("toggle-password");

      togglePassword.addEventListener("click", function(){
        if (passwordField.type == "password"){
          passwordField.type = "text";
          togglePassword.classList.remove("fa-eye");
          togglePassword.classList.add("fa-eye-slash");
        }else {
          passwordField.type = "password";
          togglePassword.classList.remove("fa-eye-slash");
          togglePassword.classList.add("fa-eye");
        }
      });
    </script>

  </body>
</html>