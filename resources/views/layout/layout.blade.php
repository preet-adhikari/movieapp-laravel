<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    @livewireStyles
</head>
<body>
{{--Navbar--}}
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-5 fixed-top">
    <div class="container">
        <a href="{{ route('movieapp.index') }}" class="navbar-brand"><h2><i class="bi bi-camera-reels"></i> Tele and Cinema</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <!--Pushes the items right -->
                <li class="nav-item">
                    <a href="{{ route('about.us') }}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#faq" class="nav-link">Questions and FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="#skip" class="nav-link">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--Content--}}
@yield('content')

{{--Footer--}}
<!-- Footer -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2021 Tele and Cinema. All rights reserved.</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>


{{--Scripts--}}
@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
