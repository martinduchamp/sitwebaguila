<!-- Button trigger modal -->
<p class="text-end">
    <a href="#!" class='link-danger' data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar propietario</a>
</p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Atención</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class='text-center my-4'>Deseas eliminar el propietario <br><span class="fs-5"><b>{{ $propietario->nombre }}</b>?</span></p>
            <form action="{{ route('propietarios.destroy', $propietario) }}" method="post" id='formDeletePropietario'>
                @csrf
                @method('delete')
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-outline-danger" form="formDeletePropietario">Si, eliminar propietario</button>
        </div>
        </div>
    </div>
</div>
