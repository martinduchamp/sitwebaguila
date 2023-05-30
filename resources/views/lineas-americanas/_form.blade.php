<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $lineaAmericana->nombre) }}" autofocus required>
    <x-error buscar='nombre'></x-error>
</div>
<div class="mb-3">
    <label for="textareaNotas" class="form-label">Notas</label>
    <textarea class="form-control" id="textareaNotas" rows="3" name="notas">{{ old('notas', $lineaAmericana->notas) }}</textarea>
    <x-error buscar='notas'></x-error>
</div>
@csrf
