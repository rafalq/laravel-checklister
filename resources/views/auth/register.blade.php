@extends('layouts.auth')

@section('content')

<div class="col-12 col-md-8">
    <div class="card mx-4">
        <div class="card-body p-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>{{  __('Register')}}</h1>
                <p class="text-muted">{{  __('Create your account')}}</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                            </svg>
                        </span>
                    </div>
                    <input id=" name" type="text" placeholder=" {{ __('Username') }}" class="form-control
                        @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                        autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></span></div>
                    <input id="email" type="email" placeholder="{{ __('E-mail Address') }}"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                </use>
                            </svg></span></div>
                    <input id="password" type="password" placeholder="{{ __('Password') }}"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg></span></div>
                    <input id="password-confirm" type="password" placeholder="{{ __('Repeat password') }}"
                        class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="row py-2">
                    <div class="col-12 col-md-6 col-lg-4 pl-4">
                        <div class="row">
                            <button class="btn btn-block btn-success px-4"
                                type="submit">{{ __('Create Account') }}</button>
                            <div class="d-block d-md-none col-12 mt-2 pl-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8 text-center text-md-right">
                        <span>{{  __('Already have an account?')}}
                            @if (Route::has('login'))
                            <a class="underline" href="{{ route('login') }}">
                                {{ __('Sign In') }}
                            </a>
                            @endif
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection