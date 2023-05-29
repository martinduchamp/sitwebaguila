@extends('aplicacion')
@section('contenido')
<h1>Editar línea americana</h1>
<br>
<form action="{{ route('tipos_remolque.update', $tipoRemolque) }}" method="post">
    @include('tipos-remolque._form')
    @method('put')
    <button class="btn btn-warning" type="submit">Actualizar tipo de remolque</button>
    <a href="{{ route('tipos_remolque.index') }}" class="btn btn-primary">Regresar</a>
</form>
<br>
@include('tipos-remolque/_modal-delete')
@endsection
