@extends('layouts.app')
@section('content')
    <div class="container">

        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Purchases</li>
            </ol>
        </nav>
        @include('layouts.alerts')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th class="text-right" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->created_at->format("l jS \of F Y") }}</td>
                    <td class="text-right">
                        <a href="{{ route('user-purchase', [$purchase->id]) }}" class="btn btn-light"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $purchases->links('layouts.paginacao') }}
    </div>
@endsection
