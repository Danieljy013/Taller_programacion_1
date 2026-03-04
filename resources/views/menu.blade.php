@extends('layouts.app')

@section('title', 'Menú')

@section('content')

<div class="text-center mb-5">
    <h1 class="fw-bold">Secciones del Sitio</h1>
    <p class="text-muted">Accede a las diferentes áreas informativas</p>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4"
                 class="card-img-top" alt="Inicio">
            <div class="card-body text-center">
                <h5>Inicio</h5>
                <p>Página principal del proyecto</p>
                <a href="{{ route('inicio') }}" class="btn btn-outline-primary">
                    Ir
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                 class="card-img-top" alt="Nosotros">
            <div class="card-body text-center">
                <h5>Nosotros</h5>
                <p>Información del proyecto y formulario PQRS</p>
                <a href="{{ route('nosotros') }}" class="btn btn-outline-primary">
                    Ir
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow">
            <img src="https://images.unsplash.com/photo-1525182008055-f88b95ff7980"
                 class="card-img-top" alt="Contacto">
            <div class="card-body text-center">
                <h5>Contacto</h5>
                <p>Canales de comunicación</p>
                <a href="{{ route('contacto') }}" class="btn btn-outline-primary">
                    Ir
                </a>
            </div>
        </div>
    </div>
</div>

@endsection