<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
      <th>Acciones</th>
      <th>Cédula</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Nacionalidad</th>
      <th>Dirección</th>
      <th>Sector</th>
      <th>Estado</th>
  </tr>
  <?php foreach($facilitadores as $f): ?>
  <tr style="height: 30px">
      <td>[<a href="<?php echo url_for('gestion/detalle?id='.$f->getId()) ?>">Consultar<a>][<a href="#">Modificar<a>][<a href="#">Eliminar<a>]</td>
      <td><?php echo $f->getCedulaPasaporte(); ?></td>
      <td><?php echo $f->getNombre(); ?></td>
      <td><?php echo $f->getApellido(); ?></td>
      <td><?php echo $f->getNacionalidad(); ?></td>
      <td><?php echo $f->getDireccion(); ?></td>
      <td><?php echo $f->getSector(); ?></td>
      <td><?php echo $f->getEstado(); ?></td>
  </tr>
  <?php endforeach; ?>
</table>
