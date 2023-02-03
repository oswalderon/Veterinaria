<?php
include './templates/Header.php';
?>

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100" style="max-width: 300px;">
      <img src="images/newspaper.png" class="card-img-top" alt="..." class="d-block w-50">
      <div class="card-body">
        <h5 class="card-title">Anuncios</h5>
        <p class="card-text">Ultimas actualizaciones de nuestros servicios y productos (horarios, promociones).</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Actualizado hace 7 días</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style="max-width: 300px;">
      <img src="images/ribbon.png" class="card-img-top" alt="..." class="d-block w-50" width=>
      <div class="card-body">
        <h5 class="card-title">Social</h5>
        <p class="card-text">Eventos sociales, logros, cumpleañeros del mes y más.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Actualizado hace 1 mes</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style="max-width: 300px;">
      <img src="images/directory.png" class="card-img-top" alt="..." class="d-block w-50">
      <div class="card-body">
        <h5 class="card-title">Directorio</h5>
        <p class="card-text">Información de contacto de nuestros proveedores, aliados y otras instituciones.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Actualizado hace 3 meses</small>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include './templates/Footer.php'
?>