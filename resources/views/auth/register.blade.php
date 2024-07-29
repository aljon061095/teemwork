@extends('layouts.app')

@section('content')
<div class="container">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-lg m-12 rounded overflow-hidden shadow-lg">
            <div class="flex items-center justify-center p-2">
                <img src="{{URL::asset('/img/tm_logo.png')}}" alt="profile Pic" class="object-cover w-60">
            </div>
            <div class="px-6 py-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-md-12 col-form-label text-md-start">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-12 col-form-label text-md-start">{{ __('Email Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                            class="col-md-12 col-form-label text-md-start">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm"
                            class="col-md-12 col-form-label text-md-start">{{ __('Confirm Password') }}</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="flex items-center justify-center">
                            <button type="submit"
                                class="btn btn-primary w-full bg-tm-primary hover:bg-tm-secondary text-white">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="flex items-center justify-center">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Already have an account? <a href="{{ route('login') }}"
                            class="text-tm-primary hover:underline dark:text-blue-500">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection