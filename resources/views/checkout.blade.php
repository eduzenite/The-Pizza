@extends('layouts.app')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        @include('layouts.alerts')
        <form action="{{ route("checkout") }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <h4 class="mb-3">Delivery address</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">First name</label>
                            <input id="first_name" type="text"
                                   class="form-control" disabled
                                   value="{{ auth()->user()->first_name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Last name</label>
                            <input id="last_name" type="text"
                                   class="form-control" disabled
                                   name="last_name" value="{{ auth()->user()->last_name }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                            <input id="phone" type="text"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" value="{{ auth()->user()->phone }}" required
                                   autocomplete="phone"
                                   autofocus>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address1">Address <span class="text-danger">*</span></label>
                        <input id="address1" type="text"
                               class="form-control @error('address1') is-invalid @enderror"
                               name="address1" value="{{ auth()->user()->address1 }}" required
                               autocomplete="address1"
                               autofocus>
                        @error('address1')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="mb-3">
                                <label for="address2">Address 2 <span
                                        class="text-muted">(Optional)</span></label>
                                <input id="address2" type="text"
                                       class="form-control @error('address2') is-invalid @enderror"
                                       name="address2" value="{{ auth()->user()->address2 }}"
                                       autocomplete="address2"
                                       autofocus>
                                @error('address2')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="zip">Zip <span class="text-danger">*</span></label>
                            <input id="zip" type="text"
                                   class="form-control @error('zip') is-invalid @enderror"
                                   name="zip" value="{{ auth()->user()->zip }}" required
                                   autocomplete="zip"
                                   autofocus>
                            @error('zip')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="inlineCheckbox1" required
                                   value="Credit card">
                            <label class="form-check-label" for="inlineCheckbox1">Credit card</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="inlineCheckbox2" required
                                   value="Debit card">
                            <label class="form-check-label" for="inlineCheckbox2">Debit card</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="inlineCheckbox3" required
                                   value="Cash">
                            <label class="form-check-label" for="inlineCheckbox3">Cash</label>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Comments</h4>

                    <div class="form-group">
                        <label for="comments">Leave a comment about your order.</label>
                        <textarea class="form-control" id="comments" name="comments" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill"><span class="total-count"></span></span>
                    </h4>
                    <ul class="list-group mb-3 show-cart2">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong><small class="money_symbol">$</small> <span class="total-cart"></span></strong>
                        </li>
                    </ul>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </div>
            </div>
        </form>
    </div>
@endsection
