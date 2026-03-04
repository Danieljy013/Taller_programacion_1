@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<!-- ENCABEZADO -->
<div class="row mb-5">
    <div class="col text-center">
        <h1 class="fw-bold text-primary">Sobre Nosotros</h1>
        <p class="text-muted mt-2">
            Proyecto académico desarrollado con Laravel y Bootstrap,
            enfocado en buenas prácticas de desarrollo web.
        </p>
    </div>
</div>

<!-- SECCIÓN INFORMATIVA -->
<div class="row align-items-center mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <img 
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
            class="img-fluid rounded shadow"
            alt="Desarrollo web"
        >
    </div>

    <div class="col-md-6">
        <h3 class="fw-semibold">Nuestra Misión</h3>
        <p>
            Aplicar conceptos de programación avanzada mediante el uso
            del framework Laravel, vistas Blade y diseño responsive
            con Bootstrap.
        </p>

        <h3 class="fw-semibold mt-4">Nuestra Visión</h3>
        <p>
            Consolidar habilidades en desarrollo web creando proyectos
            estructurados, funcionales y visualmente atractivos.
        </p>
    </div>
</div>

<hr class="mb-5">

<!-- FORMULARIO PQRS -->
<div class="row">
    <div class="col-md-8 mx-auto">

        <h2 class="text-center fw-bold mb-4">Formulario PQRS</h2>

        {{-- Mensaje de éxito --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('pqrs.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre completo</label>
                <input 
                    type="text" 
                    name="nombre" 
                    class="form-control"
                    value="{{ old('nombre') }}"
                >
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo de solicitud</label>
                <select name="tipo" class="form-select">
                    <option value="">Seleccione una opción</option>
                    <option {{ old('tipo') == 'Petición' ? 'selected' : '' }}>Petición</option>
                    <option {{ old('tipo') == 'Queja' ? 'selected' : '' }}>Queja</option>
                    <option {{ old('tipo') == 'Reclamo' ? 'selected' : '' }}>Reclamo</option>
                    <option {{ old('tipo') == 'Sugerencia' ? 'selected' : '' }}>Sugerencia</option>
                </select>
                @error('tipo')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Mensaje</label>
                <textarea 
                    name="mensaje" 
                    class="form-control" 
                    rows="4"
                >{{ old('mensaje') }}</textarea>
                @error('mensaje')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">
                    Enviar PQRS
                </button>
            </div>
        </form>

    </div>
</div>

@endsection