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
        <div class="alert alert-success">
            <h2>Thanks!</h2>
            <p>We have already received your order and soon we will start assembling it. Thank you for your purchase.</p>
        </div>
    </div>
@endsection

@section('script')
<script>
    shoppingCart.clearCart();
    displayCart();
    displayCart2();
</script>
@endsection
