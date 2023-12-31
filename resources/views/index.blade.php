@extends('layouts.landing')
@section('title','HomePage')
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-indicators">

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{asset('img/animal_banner.jpg')}}" class="d-block img-fluid" alt="">
            </div>

            <div class="carousel-item">
                <img src="{{asset('img/animal_banner.jpg')}}" class="d-block img-fluid" alt="">
            </div>

            <div class="carousel-item">
                <img src="{{asset('img/animal_banner.jpg')}}" class="d-block img-fluid" alt="">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>

        </button>
    </div>

    <div class="cards">

        @component('_components.card')
            @slot('url','')
            @slot('tag','Curiosidades')
            @slot('title','Los Delfines Rosados del Amazonas: Guardianes de una Riqueza Cultural y Natural')
        @endcomponent

        @component('_components.card')
            @slot('url','')
            @slot('tag','Curiosidades')
            @slot('title','Los Delfines Rosados del Amazonas: Guardianes de una Riqueza Cultural y Natural')
        @endcomponent

        @component('_components.card')
            @slot('url','')
            @slot('tag','Curiosidades')
            @slot('title','Los Delfines Rosados del Amazonas: Guardianes de una Riqueza Cultural y Natural')
        @endcomponent

        @component('_components.card')
            @slot('url','')
            @slot('tag','Curiosidades')
            @slot('title','Los Delfines Rosados del Amazonas: Guardianes de una Riqueza Cultural y Natural')
        @endcomponent

        @component('_components.card')
            @slot('url','')
            @slot('tag','Curiosidades')
            @slot('title','Los Delfines Rosados del Amazonas: Guardianes de una Riqueza Cultural y Natural')
        @endcomponent

        @component('_components.card')
            @slot('url','')
            @slot('tag','Curiosidades')
            @slot('title','Los Delfines Rosados del Amazonas: Guardianes de una Riqueza Cultural y Natural')
        @endcomponent
        
    </div>

@endsection