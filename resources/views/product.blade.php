@extends('layouts.app')
@section('content')
    <div class="album">
        <div class="container">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                    <li class="breadcrumb-item" ><a href="{{ route('products', [$product->category_slug]) }}">{{ $product->category_name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($photos as $key => $photo)
                                <div class="carousel-item {{ ($key === 0 ? 'active' : '') }}">
                                    <a href="{{ $photo->url }}"
                                       data-toggle="lightbox"
                                       data-gallery="example-gallery">
                                        <img src="{{ $photo->thumbnail }}"
                                             class="img-fluid" alt="{{ $product->name }}">
                                    </a>
                                </div>
                            @endforeach
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
                    <h2><small class="money_symbol">$</small> {{ number_format($product->price, 2) }}</h2>
                    <hr>
                    <p>{{ $product->description }}</p>

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
                @foreach($other_products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ route('product', [$product->category_name, $product->id]) }}">
                                <img src="{{ $product->photos[0]->url }}"
                                     class="img-fluid" alt="{{ $product->name }}">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <strong class="card-text">{{ $product->name }}</strong>
                                    <span><small class="money_symbol">$</small> {{ number_format($product->price, 2) }}</span>
                                </div>
                            </div>
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-light"><i class="fa fa-shopping-basket"></i> Add to cart</a>
                                <a href="{{ route('product', [$product->category_slug, $product->id]) }}"
                                   class="btn btn-light"><i
                                        class="fa fa-chevron-right"></i> Show Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
