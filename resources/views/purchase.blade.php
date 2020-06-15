@extends('layouts.app')
@section('content')
    <div class="container">

        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user-purchases') }}">Purchases</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $purchase->created_at->format("l jS \of F Y") }}</li>
            </ol>
        </nav>
        @include('layouts.alerts')
        <h3>{{ $purchase->created_at->format("l jS \of F Y") }}</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Products</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td><small class="money_symbol">$</small> {{ number_format($product->price, 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
