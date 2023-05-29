<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $tipoRemolque->nombre) }}" autofocus required>
    @error('nombre')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="textareaDescripcion" class="form-label">Descripción</label>
    <textarea class="form-control" id="textareaDescripcion" rows="3" name="descripcion">{{ old('descripcion', $tipoRemolque->descripcion) }}</textarea>
    @error('descripcion')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
@csrf
