@extends('layouts.landing')
@section('title','Contacto')
@section('content')

<!-- causa salte de aqui, me palteo, gracias :)---> 
<div class="container d-flex justify-content-center align-items-center" style="height: 85vh">
    
    <div class="img-caj">

        <div class="contenido-contacto">
            
            <h2>Contacto</h2>
                        
            <form action="#" method="#">

                @csrf

                <div class="mb-3">

                    <input class="input-caj form-control" type="correo" placeholder="Ingresa tu correo" required>
    
                </div>

                <div class="mb-3">

                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Ingrese texto"></textarea>
    
                </div>

                <div class="mb-3">

                    <input class="btn btn-primary form-control" type="submit" value="Enviar">
    
                </div>

            </form>
            
        </div>
        
    </div>
    
</div>

@endsection