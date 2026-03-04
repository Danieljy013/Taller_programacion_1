@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!-- HERO -->
<div class="row align-items-center mb-5">
    <div class="col-md-6">
        <h1 class="fw-bold text-primary">
            Café Informativo ☕
        </h1>
        <p class="lead">
            Sitio web informativo desarrollado con Laravel y Bootstrap,
            enfocado en buenas prácticas de desarrollo web.
        </p>
        <a href="{{ route('nosotros') }}" class="btn btn-primary btn-lg">
            Conócenos
        </a>
    </div>

    <div class="col-md-6 text-center mt-4 mt-md-0">
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93"
             class="img-fluid rounded shadow"
             alt="Café">
    </div>
</div>

<!-- VIDEO -->
<div class="row mb-5">
    <div class="col text-center">
        <h2 class="fw-bold mb-3 text-primary">
            Donde cada taza cuenta una historia
        </h2>

        <p class="text-muted mb-4">
            Descubre el proceso, el aroma y la pasión detrás de una buena taza de café.
        </p>

        <div class="ratio ratio-16x9 shadow rounded">
            <iframe
                src="https://www.youtube.com/embed/df3JeXVWYWA"
                title="Nada mejor que un café fresco"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

<!-- INTEGRANTES -->
<div class="row">
    <div class="col text-center">
        <h5 class="fw-bold">Integrantes del proyecto</h5>
        <p class="mb-0">🧑 Daniel Alexander Jojoa Yandun</p>
        <p>👩 Adriana Lucia Muñoz Rojas</p>
    </div>
</div>

@endsection