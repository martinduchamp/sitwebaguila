<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $lineaAmericana->nombre) }}">
</div>
<div class="mb-3">
    <label for="textareaNotas" class="form-label">Notas</label>
    <textarea class="form-control" id="textareaNotas" rows="5" name="notas">{{ $lineaAmericana->notas }}</textarea>
</div>
@csrf
