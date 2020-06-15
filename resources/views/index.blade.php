@extends('layouts.app')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slides/slide-1.jpg') }}" class="img-fluid" alt="Example headline">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Duble the fun on every delivery</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-warning" href="{{ route('products', ['category' => 'pizzas']) }}" role="button"><i class="fa fa-pizza-slice"></i> Pizzas</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slides/slide-2.jpg') }}" class="img-fluid" alt="Example headline">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>How about a cold drink to accompany your pizza?</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-warning" href="{{ route('products', ['category' => 'drinks']) }}" role="button"><i class="fa fa-beer"></i> Drinks</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        @include('layouts.product')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section("style")
    <link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endsection
