@extends('layouts.landing')
@section('title','Iniciar Sesion')
@section('content')

    <div class="container">
        <h1>Blog</h1>
        
        @auth
            <p>Bienvenido, {{ auth()->user()->name }}!</p>
        @endauth

        @guest
            <p>Por favor, inicia sesión para acceder a esta página.</p>
            <a href="{{ route('login_form') }}">Iniciar Sesión</a>
        @endguest

    </div>

@endsection