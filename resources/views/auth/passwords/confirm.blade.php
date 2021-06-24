@extends('layouts.auth')

@section('content')

<div class="col-12">
    <div class="card-group">
        <div class="card p-4">
            <div class="card-body">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <h1>{{ __('Confirm Password') }}</h1>
                    <p class="text-muted">{{ __('Please confirm your password before continuing.') }}</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/brand.svg#cib-mail-ru') }}">
                                </svg></span></div>
                        <input id="password" type="password" placeholder="{{ __('Password') }} 
                                class=" form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6 pl-4">
                            <div class="row">
                                <button class="btn btn-primary px-4" type="submit">{{ __('Confirm Password') }}</button>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection