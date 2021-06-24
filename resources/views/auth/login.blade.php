@extends('layouts.auth')

@section('content')

<div class="col-12">
    <div class="card-group">
        <div class="card p-4">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>{{ __('Login') }}</h1>
                    <p class="text-muted">{{  __('Sign In to your account')}}</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/brand.svg#cib-mail-ru') }}">
                                </svg></span></div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="{{ __('E-Mail Address') }}">
                        @error('email')
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
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="{{ __('Password') }}">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12 pb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-6 pl-4">
                            <div class="row">
                                <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                                <div class="d-block d-md-none col-12 mt-2 pl-0">
                                    <small>{{  __('No account?')}}
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class=" underline">{{  __('Register')}}
                                            Now!</a>
                                        @endif
                                    </small>
                                </div>
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
        <div class="card text-white bg-primary py-5 d-none d-md-block" style="width:44%">
            <div class="card-body text-center mt-5">
                <h2>{{  __('Sign up')}}</h2>
                <p>{{  __('Still do not have an account?')}}</p>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="btn btn-lg btn-outline-light mt-3 text-gray-700 underline">{{  __('Register Now!')}}
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection