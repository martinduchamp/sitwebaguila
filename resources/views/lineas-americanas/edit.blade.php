@extends('aplicacion')
@section('contenido')
<h1>Editar línea americana</h1>
<br>
<form action="{{ route('lineas_americanas.update', $lineaAmericana) }}" method="post">
    @include('lineas-americanas._form')
    @method('put')
    <button class="btn btn-warning" type="submit">Actualizar línea americana</button>
    <a href="{{ route('lineas_americanas.index') }}" class="btn btn-primary">Regresar</a>
</form>
<br>
@include('lineas-americanas/_modal-delete')
@endsection
