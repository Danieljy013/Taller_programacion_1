@extends('layouts.app')

@section('title', 'Administración PQRS')

@section('content')

<!-- ENCABEZADO -->
<div class="row mb-4">
    <div class="col text-center">
        <h1 class="fw-bold text-primary">Listado de PQRS</h1>
        <p class="text-muted">
            Visualización de peticiones, quejas, reclamos y sugerencias enviadas
        </p>
    </div>
</div>

<!-- TABLA -->
<div class="row">
    <div class="col">

        @if($pqrs->count() > 0)

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pqrs as $item)
                    <tr>
                        <td class="text-center">{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="text-center">
                            <span class="badge 
                                @if($item->tipo == 'Petición') bg-primary
                                @elseif($item->tipo == 'Queja') bg-danger
                                @elseif($item->tipo == 'Reclamo') bg-warning text-dark
                                @else bg-success
                                @endif
                            ">
                                {{ $item->tipo }}
                            </span>
                        </td>
                        <td>{{ $item->mensaje }}</td>
                        <td class="text-center">
                            {{ $item->created_at->format('d/m/Y') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @else
            <div class="alert alert-info text-center">
                No hay PQRS registradas actualmente.
            </div>
        @endif

    </div>
</div>

@endsection