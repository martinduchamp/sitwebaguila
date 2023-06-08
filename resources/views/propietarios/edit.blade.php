@extends('aplicacion')
@section('contenido')
<h1>Editar Propietario</h1>
<br>
<form action="{{ route('propietarios.update', $propietario) }}" method="post" autocomplete="off">
    @include('propietarios._form')
    @method('put')
    <button class="btn btn-warning" type="submit">Actualizar propietario</button>
    <a href="{{ route('propietarios.index') }}" class="btn btn-primary">Regresar</a>
</form>
<br>
@include('propietarios/_modal-delete')
@endsection
