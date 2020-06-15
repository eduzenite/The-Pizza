@extends('layouts.app')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
        @include('layouts.alerts')
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div class="media">
                    <img src="{{ asset('assets/img/pizza.jpg') }}" style="max-width: 60px;" class="mr-3" alt="Product Name">
                    <div class="media-body">
                        <h6 class="my-0">Marguerita</h6>
                        <small class="text-muted">Pizza</small>
                    </div>
                </div>
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
                <span class="text-muted">$15,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <h5>Total</h5>
                <h5>$20</h5>
            </li>
        </ul>

        <hr>
        <div class="text-right">
        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
        </div>
    </div>
@endsection
