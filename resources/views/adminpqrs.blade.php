@extends('layouts.app')

@section('title', 'Panel Admin')

@section('content')

<div class="container">

    <!-- TITULO -->
    <div class="row mb-4">
        <div class="col text-center">
            <h1 class="fw-bold">Panel de Administración</h1>
            <p class="text-muted">Mensajes recibidos desde los formularios del sitio</p>
        </div>
    </div>

    <!-- TABLA PQRS -->
    <div class="card shadow mb-5">
        <div class="card-body">

            <h2 class="mb-4 text-center">Mensajes PQRS</h2>

            @if($pqrs->isEmpty())

                <p class="text-center text-muted">No hay mensajes registrados.</p>

            @else

            <div class="table-responsive">
                <table class="table table-striped align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Acción</th> <!-- COLUMNA NUEVA -->
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($pqrs as $mensaje)

                        <tr>
                            <td>{{ $mensaje->id }}</td>

                            <td>
                                {{ $mensaje->nombre }}
                            </td>

                            <td>
                                {{ $mensaje->correo }}
                            </td>

                            <td>
                                {{ $mensaje->mensaje }}
                            </td>

                            <td>
                                {{ $mensaje->created_at->format('d/m/Y H:i') }}
                            </td>

                            <!-- BOTON ELIMINAR -->
                            <td>
                                <form action="{{ route('pqrs.delete', $mensaje->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que quieres eliminar este mensaje?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>

            @endif

        </div>
    </div>


    <!-- TABLA CONTACTOS -->
    <div class="card shadow">
        <div class="card-body">

            <h2 class="mb-4 text-center">Mensajes de Contacto</h2>

            @if($contactos->isEmpty())

                <p class="text-center text-muted">No hay mensajes de contacto.</p>

            @else

            <div class="table-responsive">

                <table class="table table-striped align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Acción</th> <!-- COLUMNA NUEVA -->
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($contactos as $contacto)

                        <tr>
                            <td>{{ $contacto->id }}</td>

                            <td>
                                {{ $contacto->nombre }}
                            </td>

                            <td>
                                {{ $contacto->correo }}
                            </td>

                            <td>
                                {{ $contacto->mensaje }}
                            </td>

                            <td>
                                {{ $contacto->created_at->format('d/m/Y H:i') }}
                            </td>

                            <!-- BOTON ELIMINAR -->
                            <td>
                                <form action="{{ route('contacto.delete', $contacto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que quieres eliminar este mensaje?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            @endif

        </div>
    </div>

</div>

@endsection