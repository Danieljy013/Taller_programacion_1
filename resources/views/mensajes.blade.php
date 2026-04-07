@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<h2 class="text-center mb-4">Mensajes recibidos</h2>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mensajes as $mensaje)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection