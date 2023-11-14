@extends('auth.layouts')

<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toogle navigatioin">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}"
                                class="nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}"
                                class="nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
@section('content')
<div class="row justify-content-center mt-5"> 
<h1 class="h1-register-login">Login</h1>
    <div class="col-md-4">
        <img src="{{ asset('assets/img/vector3.jpg') }}" class="img-regis" width="500px">
    </div>
    <div class="col-md-8"> 
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="mb-3 row">
        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
        <div class="col-md-6">
        <input type="email" class="form-control @error('email') is-invalid @enderror"
        id="email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
            <div class="col-md-6">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id=?password?
                name="password"> @if ($errors->has('password')) <span class="text-danger">{{ $errors->first('password')
            }}</span>
            @endif
            </div>
        </div>
        <div class="mb-3 row">
            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
        </div>
    </form>
</div>
</div>
@endsection