@extends('aplicacion')
@section('contenido')
<h1>Nuevo movimiento</h1>
<br>
<form action="{{ route('movimientos.store') }}" method="post">
    @include('movimientos._form')
    <button class="btn btn-success" type="submit">Guardar movimiento</button>
    <a href="{{ route('movimientos.index') }}" class="btn btn-primary">Cancelar</a>
</form>
@endsection
