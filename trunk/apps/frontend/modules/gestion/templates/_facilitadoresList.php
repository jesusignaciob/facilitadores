  <input id="nombre" type="hidden" value="<?php echo $nombre; ?>" />
  <input id="apellido" type="hidden" value="<?php echo $apellido; ?>" />
  <input id="cedula" type="hidden" value="<?php echo $cedula; ?>" />
  <input id="estado" type="hidden" value="<?php echo $estado; ?>" />
  <input id="municipio" type="hidden" value="<?php echo $municipio; ?>" />
  <input id="parroquia" type="hidden" value="<?php echo $parroquia; ?>" />
  <input id="estatus" type="hidden" value="<?php echo $estatus; ?>" />

<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
      <th>Acciones</th>
      <th>Cédula</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Estado</th>
      <th>Areas de Formacion</th>
  </tr>
  <?php foreach($facilitadores as $f): ?>
  <tr style="height: 30px">
      <td>
        [<a href="<?php echo url_for('gestion/detalle?id='.$f->getId()) ?>">Consultar<a>]
        [<a href="#">Modificar<a>]
        [<a href="#" onclick="eliminarFacilitador($('#estado').val(), $('#municipio').val(), $('#parroquia').val(), $('#estatusAreaFormacion').val(), <?php echo $f->getId(); ?>); return false;">Eliminar<a>]
      </td>
      <td><?php echo $f->getCedulaPasaporte(); ?></td>
      <td><?php echo $f->getNombre(); ?></td>
      <td><?php echo $f->getApellido(); ?></td>
      <td><?php echo $f->getEstado(); ?></td>
      <td>
        <table border="0">
          <?php foreach($f->getAreasFormacionFacilitador() as $aff): ?>
          <tr style="text-align:left; height: 15px">
            <td><?php echo $aff->getAreasFormacion()->getNombreArea(); ?></td>
            <td><?php echo $aff->getEstatus(); ?></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </td>
  </tr>
  <?php endforeach; ?>
</table>
