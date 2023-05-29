@extends('aplicacion')
@section('contenido')
<h1>Líneas americanas</h1>
<p class="text-end">
    <a href="{{ route('lineas_americanas.create') }}" class="btn btn-primary">Nueva</a>
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
            @foreach($lineasAmericanas as $lineaAmericana)
            <tr>
                <td>
                    <div>{{ $lineaAmericana->nombre }}</div>
                    <small class='text-muted'>{{ $lineaAmericana->notas }}</small>
                </td>
                <td class="text-end">
                    <a href="{{ route('lineas_americanas.edit', $lineaAmericana) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
