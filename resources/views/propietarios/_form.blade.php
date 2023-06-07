<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $propietario->nombre) }}" autofocus required>
    <x-error buscar='nombre'></x-error>
</div>
<div class="mb-3">
    <label class="form-label">Tipos de remolque</label>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                @foreach($tipos_remolque as $tipo_remolque)
                <?php $checkbox_id = 'tipoRemolque' . $tipo_remolque->id ?>
                <tr>
                    <td style="width:1%">
                        <input type="checkbox" class="form-check-input" id="{{ $checkbox_id }}" name='tipos_remolque[]' value="{{ $tipo_remolque->id }}" @checked( in_array($tipo_remolque->id, old('tipos_remolque', $propietario->tipos_remolque_array)) )>
                    </td>
                    <td>
                        <label for="{{ $checkbox_id }}" class='form-check-labe'>{{ $tipo_remolque->nombre }}</label>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-error buscar='tipos_remolque'></x-error>
    <x-error buscar='tipos_remolque.*'></x-error>
</div>
@csrf
