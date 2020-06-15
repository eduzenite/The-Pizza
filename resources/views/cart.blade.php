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
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody class="show-cart">

            </tbody>
            <tfoot>
            <tr>
                <td colspan="4"><strong>Total price: $ <span class="total-cart"></span></strong></td>
            </tr>
            </tfoot>
        </table>

        <hr>
        <div class="text-right">
        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
        </div>
    </div>
@endsection
