@extends('layouts.app')
@section('content')
    <div class="album mt-0 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Pizza</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Marguerita</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @for($i = 0; $i < 5; $i++)
                            <div class="carousel-item {{ ($i === 0 ? 'active' : '') }}">
                                <a href="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/pizza.jpg" data-toggle="lightbox"
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
                </div>
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
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
@endsection
