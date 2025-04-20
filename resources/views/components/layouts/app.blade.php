<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/dashboard_styles.css') }}">
        @yield('styles')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/02c07b0853.js" crossorigin="anonymous"></script>   
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <x-sidebar></x-sidebar>
                <main class="col-lg-10 content">
                    <x-navbar-dashboard></x-navbar-dashboard>
                    <div class="container-fluid p-4">
                      <header class="fs-3 fw-bold">{{ $section_title ?? 'Dashboard' }}</header>
                      @if (session('success'))
                      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>                  @endif
                      {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
