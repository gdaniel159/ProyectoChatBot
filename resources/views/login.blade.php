@extends('layouts.landing')
@section('title','Iniciar Sesion')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 85vh">

        <form action="" class="formLogin" method="POST">

            <h2 style="color: #fff">LOGIN</h2>

            <div class="mb-3 mt-5">

                <label for="email" class="form-label">Correo</label>
                <input type="email" id="email" name="email" required placeholder="Enter an email..." class="form-control">

            </div>

            <div class="mb-3">

                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" required placeholder="Enter a password..." class="form-control">

            </div>

            <div class="mb-3">

                <input type="submit" value="Iniciar Sesion" class="form-control">

            </div>

        </form>

    </div>

@endsection