@extends('layouts.app')

@section('content')
    <div class="container form-container">
        <div class="img">
            <img src="{{ asset('/img/bg.svg') }}">
        </div>
        <div class="login-content">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <img src="{{ asset('/img/avatar.svg') }}">
                <h2 class="title">{{ __('Login') }}</h2>
                <br>
                <div class="input-div one @error('name') error @enderror">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input" name="name" placeholder="{{ __('Name') }}">
                    </div>
                </div>
                @error('name')
                    <div class="div text-left text-red" role="alert">
                        <b class="w-100">{{ $message }}</b>
                    </div>
                @enderror
                <div class="input-div one @error('email') error @enderror">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="email" class="input" name="email" placeholder="{{ __('Email') }}">
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
                        <input type="password" class="input" name="password"
                            placeholder="{{ __('Password') }}">
                    </div>
                </div>
                @error('password')
                    <div class="div text-left text-red" role="alert">
                        <b class="w-100">{{ $message }}</b>
                    </div>
                @enderror
                <div class="input-div pass @error('email') error @enderror">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" name="password_confirmation"
                            placeholder="{{ __('Confirm Password') }}">
                    </div>
                </div>

                <input type="submit" class="btn" value="{{ __('Register') }}">
            </form>
        </div>
    </div>
@endsection
