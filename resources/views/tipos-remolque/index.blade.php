@extends('aplicacion')
@section('contenido')
<h1>Tipos de remolque</h1>
<p class="text-end">
    <a href="{{ route('tipos_remolque.create') }}" class="btn btn-primary">Nuevo</a>
</p>
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Nombre</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($tiposRemolque as $tipoRemolque)
            <tr>
                <td>{{ $tipoRemolque->nombre }}</td>
                <td class="text-end">
                    <a href="{{ route('tipos_remolque.edit', $tipoRemolque) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
