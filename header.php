<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="intranet" width="36px"></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="panel.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
          <div>
              <ul class="navbar dropdown-toggle" data-toggle="dropdown">
                  Datos
                  <span class="caret"></span>
              </ul>
              <ul class="dropdown-menu">
                  <li><a href="listado.php">Listado material</a></li>
                  <li><a href="insertar.php">Insertar material</a></li>
                  <li><a href="editarDatos.php">Editar material</a></li>
                  <li><a href="borrarDatos.php">Borrar material</a></li>
              </ul>
          </div>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Salir</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
</nav>