@extends('layouts.app')

@section('content')
    <div class="container form-container">
        <div class="img">
            <img src="{{ asset('/img/bg.svg') }}">
        </div>
        <div class="login-content">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <img src="{{ asset('/img/avatar.svg') }}">
                <h2 class="title">{{ __('Login') }}</h2>
                <br>

                <div class="input-div one @error('email') error @enderror">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>

                    <div class="div">
                        <input type="email" class="input" name="email"
                            value="{{ old('email') ?? 'admin@gmail.com' }}" placeholder="{{ __('Email') }}">
                    </div>
                </div>
                @error('email')
                    <div class="div text-left text-red" role="alert">
                        <b class="w-100">{{ $message }}</b>
                    </div>
                @enderror

                <div class="input-div pass @error('email') error @enderror">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" name="password" value="password"
                            placeholder="{{ __('Password') }}">
                    </div>
                </div>
                @error('password')
                    <div class="div text-left text-red" role="alert">
                        <b class="w-100">{{ $message }}</b>
                    </div>
                @enderror
                <div class="d-flex justify-content-between align-items-center m-25">
                    <div class="d-flex justify-content-start align-items-center ">
                        <input type="checkbox" name="" id="" class="d-flex justify-content-start">
                        <span class="ml-1">
                            {{ __('Remember Me') }}
                        </span>
                    </div>
                    <a href="#" class="d-flex justify-content-end">{{ __('Forgot your password?') }}</a>
                </div>
                <input type="submit" class="btn" value="{{ __('Login') }}">
            </form>
        </div>
    </div>
@endsection
