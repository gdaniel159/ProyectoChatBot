@extends('layouts.landing')
@section('title','Iniciar Sesion')
@section('content')

    <div class="container">
        <h1>Blog</h1>
        
        @auth
            
            <p>Bienvenido, {{ auth()->user()->name }}!</p>

            

        @endauth

    </div>

@endsection