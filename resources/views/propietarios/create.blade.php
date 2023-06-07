@extends('aplicacion')
@section('contenido')
<h1>Nuevo Propietario</h1>
<br>
<form action="{{ route('propietarios.store') }}" method="post" autocomplete="off">
    @include('propietarios._form')
    <button class="btn btn-success" type="submit">Guardar propietario</button>
    <a href="{{ route('propietarios.index') }}" class="btn btn-primary">Cancelar</a>
</form>
@endsection
