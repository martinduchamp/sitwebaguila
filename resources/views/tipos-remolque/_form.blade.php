<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $tipoRemolque->nombre) }}" autofocus required>
    @error('nombre')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
@csrf
