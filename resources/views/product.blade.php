@extends('layouts.app')
@section('content')
    <div class="album mt-0 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Pizzas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Marguerita</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @for($i = 0; $i < 5; $i++)
                                <div class="carousel-item {{ ($i === 0 ? 'active' : '') }}">
                                    <a href="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/pizza.jpg"
                                       data-toggle="lightbox"
                                       data-gallery="example-gallery">
                                        <img src="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/pizza.jpg"
                                             class="img-fluid" alt="Marguerita">
                                    </a>
                                </div>
                            @endfor
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2><small>$</small> 90.00</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend sub" id="sub">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="number" id="quantity" class="form-control" min="1" value="1" aria-describedby="button-addon1">
                                        <div class="input-group-append add" id="add">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <button class="btn btn-success">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr>
            <h2>Related Products</h2>
            <div class="row">
                @for($i = 0; $i < 3; $i++)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                 focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>
                                    Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <strong class="card-text">Product title</strong>
                                    <span>$ 90.00</span>
                                </div>
                            </div>
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-light"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                                <a href="{{ route('product', [1]) }}" class="btn btn-light"><i
                                        class="fa fa-chevron-right"></i> Show Details</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
@section("style")
    <link href="{{ asset('assets/vendor/lightbox-master/ekko-lightbox.css') }}" rel="stylesheet">
@endsection

@section("script")
    <script src="{{ asset('assets/vendor/lightbox-master/ekko-lightbox.min.js') }}"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection
