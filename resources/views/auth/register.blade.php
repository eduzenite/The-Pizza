@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('login') }}">Login</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
        </nav>
        @include('layouts.alerts')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First name <span class="text-danger">*</span></label>
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ old('first_name') }}" required
                                           autocomplete="first_name" autofocus>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last name <span class="text-danger">*</span></label>
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{ old('last_name') }}" required
                                           autocomplete="last_name" autofocus>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <div class="input-group">
                                    <input id="phone" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                           autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address1">Address <span class="text-danger">*</span></label>
                                <input id="address1" type="text"
                                       class="form-control @error('address1') is-invalid @enderror"
                                       name="address1" value="{{ old('address1') }}" required autocomplete="address1"
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
                                               name="address2" value="{{ old('address2') }}"
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
                                           name="zip" value="{{ old('zip') }}" required
                                           autocomplete="zip"
                                           autofocus>
                                    @error('zip')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password-confirm">Confirm Password <span class="text-danger">*</span></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
