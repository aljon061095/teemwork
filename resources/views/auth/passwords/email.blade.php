@extends('layouts.app')

@section('content')
<div class="container">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-lg m-12 rounded overflow-hidden shadow-lg">
            <div class="flex items-center justify-center p-2">
                <img src="{{URL::asset('/img/tm_logo.png')}}" alt="profile Pic" class="object-cover w-60">
            </div>
            <div class="px-6 py-3">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('Email Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="flex items-center justify-center">
                            <button type="submit" class="btn btn-primary w-full bg-tm-primary hover:bg-tm-secondary text-white">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="flex items-center justify-center">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        <a href="{{ route('login') }}" class="text-tm-primary hover:underline dark:text-blue-500">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection