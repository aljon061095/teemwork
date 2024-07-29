@extends('layouts.app')

@section('content')
<div class="container">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-lg m-12 rounded overflow-hidden shadow-lg">
            <div class="flex items-center justify-center p-2">
                <img src="{{URL::asset('/img/tm_logo.png')}}" alt="profile Pic" class="object-cover w-60">
            </div>
            <div class="px-6 py-3">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('Email Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" placeholder="name@company.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-12 col-form-label text-md-start">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password" placeholder="••••••••"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-start mb-4">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" 
                                type="checkbox" value="" class="w-4 h-4 border
                                border-gray-300 rounded bg-gray-50 focus:ring-3
                                focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600
                                dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                dark:focus:ring-offset-gray-800">
                            </div>
                            <label for="remember"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="ms-auto text-sm text-tm-primary hover:underline dark:secondary">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <div class="row mb-4">
                        <div class="flex items-center justify-center">
                            <button type="submit" class="btn btn-primary w-full bg-tm-primary hover:bg-tm-secondary text-white">
                                {{ __('Login to your account') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="flex items-center justify-center">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="{{ route('register') }}" class="text-tm-primary hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection