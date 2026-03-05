@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<!-- ENCABEZADO -->
<div class="row mb-5">
    <div class="col text-center">
        <h1 class="fw-bold">Contáctanos</h1>
        <p class="text-muted mt-2">
            Si tienes alguna duda o comentario, no dudes en comunicarte con nosotros.
        </p>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row">

    <!-- COLUMNA IZQUIERDA -->
    <div class="col-md-6 mb-4">
        <h4 class="fw-semibold">Información de contacto</h4>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item">
                📧 Email: contacto@cafeinformativo.com
            </li>
            <li class="list-group-item">
                🌐 Sitio web: www.cafeinformativo.com
            </li>
            <li class="list-group-item">
                📞 Teléfono: +57 318 757 1126
            </li>
            <li class="list-group-item">
                📍 Ciudad: Pasto, Colombia
            </li>
        </ul>

        <h5 class="fw-bold">Integrantes del proyecto</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold">
                👤 Adriana Lucia Muñoz Rojas
            </li>
            <li class="list-group-item fw-bold">
                👤 Daniel Alexander Jojoa Yandun
            </li>
        </ul>
    </div>

    <!-- COLUMNA DERECHA -->
    <div class="col-md-6">
        <h4 class="fw-semibold">Mensaje rápido</h4>

        <form action="{{ route('contacto.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo electrónico</label>
            <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="4" placeholder="Escribe tu mensaje" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Enviar mensaje
        </button>

</form>
    </div>

</div>

@endsection