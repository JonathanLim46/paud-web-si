<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/02c07b0853.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .sidebar{
            height: 100vh;
        }

        .nav-item{
            margin-top: 2.5rem;
        
        }
        .nav-item a{
            text-decoration: none;
            color: black
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="border: 1px solid green">
        <div class="row">
            <aside class="col-2 pt-4 sidebar" style="border: 1px solid red">
                <header class="d-flex justify-content-center">
                    <h4>PAUD KB AL-HUSNA</h4>
                </header>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav  flex-column">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                          <a class="nav-link" href="#">Features</a>
                          <a class="nav-link" href="#">Pricing</a>
                          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </div>
                      </div>
                    </div>
                </nav>
            </aside>
            <main class="col-10 content" style="border: 1px solid blue">
                <h3>MAIN CONTENT</h3>
                <a href="{{ route('admin') }}">test</a>
            </main>
        </div>
    </div>
</body>
</html>