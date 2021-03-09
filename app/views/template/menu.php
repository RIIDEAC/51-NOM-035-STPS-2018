<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo $this->_config->get('app/webbase'); ?>inicio"><i
          class="fa fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>MenuCaptura"><i
          class="fa fa-pen"></i> Capturar</a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>MenuEliminar"><i
          class="fa fa-trash-alt"></i> Eliminar</a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>Avance"><i
          class="fa fa-tasks"></i> Avance</a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>Resultados"><i
          class="fa fa-chart-bar"></i> Resultados</a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>Descargar"><i
          class="fa fa-file-download"></i> Descargar</a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>Acercade"><i
          class="fa fa-info-circle"></i> Acerca de</a>
      <a class="nav-item nav-link" href="<?php echo $this->_config->get('app/webbase'); ?>salir"><i
          class="fa fa-sign-out-alt"></i> Salir</a>
    </div>
  </div>
</nav>
<div class="container">