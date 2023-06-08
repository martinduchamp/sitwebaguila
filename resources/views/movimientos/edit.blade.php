@extends('aplicacion')
@section('contenido')
<h1>Editar movimiento</h1>
<br>
<form action="{{ route('movimientos.update', $movimiento) }}" method="post">
    @include('movimientos._form')
    @method('put')
    <button class="btn btn-warning" type="submit">Actualizar movimiento</button>
    <a href="{{ route('movimientos.index') }}" class="btn btn-primary">Regresar</a>
</form>
@include('movimientos._script_propietario_remolque')
<br>
@include('movimientos/_modal-delete')
@endsection
