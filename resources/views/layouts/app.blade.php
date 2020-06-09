<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Página de produtos, usando Bootstrap.</title>
    <link href="{{ asset('assets/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free-5.13.0-web/css/all.css') }}" rel="stylesheet">
    @yield("style")
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-xl">
        <a class="navbar-brand" href="#">
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
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Pizza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Drinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-profile') }}">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-purchases') }}">Purchses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-login') }}">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle ml-2" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-basket"></i>
                </button>
                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;">
                    <p>
                        Some example text that's free-flowing within the dropdown menu.
                    </p>
                    <p class="mb-0">
                        And this is more example text.
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span class="text-muted">By <a href="https://www.linkedin.com/in/eduardo-nascimento-zenite/" target="_blank">Eduardo Nascimento</a>.</span>
    </div>
</footer>


<!-- Principal JavaScript do Bootstrap
================================================== -->
<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('assets/vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js') }}"></script>
@yield("script")
</body>
</html>
