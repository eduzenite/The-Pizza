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
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th class="text-right" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 1; $i <= 10; $i++)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>August 25, 2020</td>
                <td class="text-right">
                    <a class="btn btn-light"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            @endfor
            </tbody>
        </table>
    </div>
@endsection
