@extends('layouts.app')
@section('content')
    <div class="album mt-0 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pizzas</li>
                </ol>
            </nav>
            <div class="row">
                @for($i = 0; $i < 12; $i++)
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
            <div class="span12">
                <div class="btn-toolbar p-5" role="toolbar" aria-label="Toolbar with button groups"
                     style="justify-content: center; display: flex;">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-primary"><i class="fa fa-chevron-left"></i></button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary">3</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-primary"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
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
