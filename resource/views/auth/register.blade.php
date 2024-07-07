@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
<div class="header-banner"></div>

<h1 class="register-header">Register</h1>

<div class="form-container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">お名前:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="register-button">登録</button>
        </div>
    </form>

    <div>
        <a href="{{ route('login') }}" class="login-button">Login</a>
    </div>
</div>

<div class="bottom-banner"></div>
@endsection