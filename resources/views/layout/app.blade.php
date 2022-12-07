<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vapeur</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark" style="background-color: #515559;">
        <div class="container-fluid">
            <img src="{{asset("images/logo.jpg")}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="{{ route('games.index') }}">Vapeur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-right mb-2 mb-lg-0">
                    @if (empty(session('userId')))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.login') }}">
                                <span class="bi bi-box-arrow-in-right"></span>
                                <span class="d-sm-none">Log in</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="bi bi-person"></span>
                                {{ session('username') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('favoris.index') }}">Favoris</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.logout') }}">
                                <span class="bi bi-box-arrow-right"></span>
                                <span class="d-sm-none">Log out</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const fetch_config = {
            route: "{{route("games.update", 0)}}"
        };
    </script>
    <script src="/js/app.js"></script>
</body>

</html>
