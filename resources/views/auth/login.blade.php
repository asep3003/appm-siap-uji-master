@extends('layouts.login')
@section('content')
  @if (request()->is('login'))
    <div class="register-form">
      <div class="auth-vector">
        <img src="{{ asset('assets/vectors/login-vector.svg') }}" alt="" width="200px">
      </div>
      @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session ('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session ('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form action="/login" method="POST">
        @csrf
        <h1 class="auth-title">Login</h1>
        <div class="form-input">
          <label class="auth-label" for="username">Username</label>
          <input type="text" name="username" id="username" class="auth-input">
        </div>
        <div class="form-input">
          <label class="auth-label" for="password">Password</label>
          <input type="password" name="password" id="password" class="auth-input">
        </div>
        <button type="submit" class="auth-button">Login</button>
        <button type="submit" class="auth-button-outline">
          <a href="/petugas/login" class="auth-link">Login Sebagai Petugas</a>
        </button>
      </form>
      <p class="auth-sign">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
    </div>
  @endif
  @if (request()->is('petugas/login'))
    <div class="register-form">
      <div class="auth-vector">
        <img src="{{ asset('assets/vectors/login-vector.svg') }}" alt="" width="200px">
      </div>
      @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session ('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <form action="/petugas/login" method="POST">
        @csrf
        <h1 class="auth-title">Login Petugas</h1>
        <div class="form-input">
          <label class="auth-label" for="username">Username</label>
          <input type="text" name="username" id="username" class="auth-input">
        </div>
        <div class="form-input">
          <label class="auth-label" for="password">Password</label>
          <input type="password" name="password" id="password" class="auth-input">
        </div>
        <button type="submit" class="auth-button">Login</button>
        <button type="submit" class="auth-button-outline">
          <a href="/login" class="auth-link">Login Sebagai Masyarakat</a>
        </button>
      </form>
    </div>
  @endif

@endsection