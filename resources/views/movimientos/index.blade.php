@extends('aplicacion')
@section('contenido')
<h1>Movimientos</h1>
<p class="text-end">
    <a href="{{ route('movimientos.create') }}" class="btn btn-primary">Nuevo</a>
</p>
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Número</th>
                <th>Placas</th>
                <th>Propietario</th>
                <th>Tipo</th>
                <th class='text-nowrap'>Línea americana</th>
                <th class='text-nowrap'>Cerrado en extranjero</th>
                <th class='text-nowrap'>Cruce directo</th>
                <th>Origen</th>
                <th>Destino</th>
                <th class='text-nowrap'>Dias en patio</th>
                <th class='text-nowrap'>Fecha y hora</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($movimientos as $movimiento)
            <tr>
                <td>{{ $movimiento->numero_remolque }}</td>
                <td>{{ $movimiento->placas_remolque }}</td>
                <td>{{ $movimiento->propietario_remolque }}</td>
                <td>{{ $movimiento->tipoRemolque->nombre }}</td>
                <td>{{ $movimiento->lineaAmericana->nombre }}</td>
                <td class='text-capitalize'>{{ $movimiento->responde_es_cerrado_extranjero }}</td>
                <td class='text-capitalize'>{{ $movimiento->responde_es_cruce_directo }}</td>
                <tdtd>
                <td></td>
                <td></td>
                <td>{{ $movimiento->cantidad_dias_patio }}</td>
                <td>
                    {{ $movimiento->fecha }} {{ $movimiento->hora }}
                </td>
                <td class="text-end">
                    <a href="{{ route('movimientos.edit', $movimiento) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
