<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('escritorio.index') }}">
              <span>Escritorio</span>
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('movimientos.index') }}">Movimientos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <span>Catálogos</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('lineas_americanas.index') }}">
                <span>Empleados</span>
              </a>
              <a class="dropdown-item" href="{{ route('tipos_remolque.index') }}">
                <span>Tipos de remolque</span>
              </a>
              <a class="dropdown-item" href="{{ route('propietarios.index') }}">
                <span>Propietarios</span>
              </a>

             </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
