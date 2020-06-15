<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('assets/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-5.13.0-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield("style")
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('assets/img/icon.png') }}" width="30" height="30" class="d-inline-block align-top" alt=""
                 loading="lazy">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL"
                aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item {{ request()->is('products/pizzas') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products', ['category' => 'pizzas']) }}">Pizza</a>
                </li>
                <li class="nav-item {{ request()->is('products/drinks') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('products', ['category' => 'drinks']) }}">Drinks</a>
                </li>
                @if($user = Auth::user())
                    <li class="nav-item {{ Route::currentRouteName() == 'user-purchases' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user-purchases') }}">Purchases</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user-profile') }}">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('exit') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            </ul>
            <form class="form-inline my-2 my-md-0" action="{{ route('products') }}">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search" value="{{ !empty($request->q) ? $request->q : '' }}" name="q" aria-label="Search">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>

            </form>
            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle ml-2" data-toggle="dropdown"
                        data-display="static" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-basket"></i>
                </button>
                <div class="dropdown-menu">
                    <li class="dropdown-item lh-condensed">
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">3x / $ 5.00</small>
                    </li>
                    <li class="dropdown-item lh-condensed">
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">3x / $ 5.00</small>
                    </li>
                    <li class="dropdown-item lh-condensed">
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">3x / $ 5.00</small>
                    </li>
                    <li class="dropdown-item text-center">
                        <a href="{{ route('cart') }}" class="btn btn-block btn-success"><i class="fa fa-shopping-basket"></i> Cart</a>
                    </li>
                </div>
            </div>
        </div>
    </div>
</nav>

<main role="main" class="pb-5">
    @yield('content')
</main>

<footer class="footer mt-auto py-3">
    <div class="text-center">
        <span class="">By <a href="https://www.linkedin.com/in/eduardo-nascimento-zenite/" target="_blank">Eduardo Nascimento</a>.</span>
    </div>
</footer>

<script src="{{ asset('assets/vendor/jquery-3.5.1/jquery-3.5.1.min.js ') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js') }}"></script>

<script>
    window.jQuery || document.write('<script src="{{ asset('assets/vendor/jquery-3.5.1/jquery-3.x-git.slim.min.js') }}"><\/script>')
</script>
<script src="{{ asset('assets/vendor/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
@yield("script")
</body>
</html>
