@extends('layouts.auth')

@section('title')
Login
@endsection

@section('content')
<div class="container">
    <div class="login-page">
        <div class="card">
            <div class="form-header">
                <img src="{{ asset('img/Logo2.png')}}" alt="">
                <h2>
                    Hello, Let's get started!
                </h2>
                <p>
                    Login untuk dapat masuk ke Tasya
                </p>
            </div>

            <form action="{{route('loginForm')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="InputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="InputEmail1" required>
                </div>
                <div class="form-group">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="InputPassword" required>
                </div>
                <button type="submit" class="col-12 btn btn-primary mb-2 shadow"> Submit</button>
            </form>

            <p class="text-center belum">
                Belum punya Akun?
                <a href="{{ route('reg1') }}">
                    Gabung Sekarang
                </a>
            </p>
        </div>
    </div>
</div>
@endsection