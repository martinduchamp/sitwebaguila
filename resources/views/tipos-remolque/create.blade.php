@extends('aplicacion')
@section('contenido')
<h1>Nuevo tipo de remolque</h1>
<br>
<form action="{{ route('tipos_remolque.store') }}" method="post">
    @include('tipos-remolque._form')
    <button class="btn btn-success" type="submit">Guardar tipo de remolque</button>
    <a href="{{ route('tipos_remolque.index') }}" class="btn btn-primary">Cancelar</a>
</form>
@endsection
