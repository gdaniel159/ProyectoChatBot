@extends('layouts.landing')
@section('title','Registrar una cuenta')
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">

        <form action="{{ route('register') }}" method="POST" class="formRegister">

            @csrf

            <h2 style="color: #fff">REGISTER</h2>

            <div class="mb-3 mt-5">
                <label for="tipo_id" class="form-label">Tipo de Usuario</label>
                <select id="tipo_id" name="tipo_id" required class="form-control">
                    <option value="">Seleccione un tipo de usuario</option>
                    @foreach ($tiposUsuarios as $tipoUsuario)
                        <option value="{{ $tipoUsuario->id }}">{{ $tipoUsuario->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 mt-4">

                <label for="name" class="form-label">Nombres</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name..." class="form-control">

            </div>

            <div class="mb-3 mt-4">

                <label for="surname" class="form-label">Apellidos</label>
                <input type="text" id="surname" name="surname" required placeholder="Enter your surname..." class="form-control">

            </div>

            <div class="mb-3 mt-4">

                <label for="email" class="form-label">Correo</label>
                <input type="email" id="email" name="email" required placeholder="Enter an email..." class="form-control">

            </div>

            <div class="mb-3 mt-4">

                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" required placeholder="Enter a password..." class="form-control">

            </div>

            <div class="mb-3">

                <label for="bio" class="form-label">Biografia</label>
                <input type="text" id="bio" name="bio" required placeholder="Enter a biografy..." class="form-control">

            </div>

            <div class="mb-3">

                <label for="contact_info" class="form-label">Telefono</label>
                <input type="text" id="contact_info" name="contact_info" required placeholder="Enter a telephone..." class="form-control">

            </div>

            <div class="mb-3 mt-5">

                <input type="submit" value="Crear cuenta" class="form-control">

            </div>

        </form>

    </div>
@endsection