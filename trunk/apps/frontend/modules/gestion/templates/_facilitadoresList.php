  <input id="nombre" type="hidden" value="<?php echo $nombre; ?>" />
  <input id="apellido" type="hidden" value="<?php echo $apellido; ?>" />
  <input id="cedula" type="hidden" value="<?php echo $cedula; ?>" />
  <input id="estado" type="hidden" value="<?php echo $estado; ?>" />
  <input id="municipio" type="hidden" value="<?php echo $municipio; ?>" />
  <input id="parroquia" type="hidden" value="<?php echo $parroquia; ?>" />
  <input id="estatus" type="hidden" value="<?php echo $estatus; ?>" />
  <input id="area" type="hidden" value="<?php echo $area; ?>" />

<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
      <th rowspan="2">Acciones</th>
      <th rowspan="2">Cédula</th>
      <th rowspan="2">Nombres</th>
      <th rowspan="2">Apellidos</th>
      <th rowspan="2">Estado</th>
      <th rowspan="1" colspan="2">Areas de Formacion</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <th>Estatus</th>
  </tr>
  <?php foreach($facilitadores as $f): ?>
  <tr style="height: 30px">
      <td>
        [<a href="<?php echo url_for('gestion/detalle?id='.$f->getId()) ?>">Consultar<a>]
        [<a href="#">Modificar<a>]
        [<a href="#" onclick="eliminarFacilitador($('#estado').val(), $('#municipio').val(), $('#parroquia').val(), $('#estatus').val(), $('#area').val(), <?php echo $f->getId(); ?>); return false;">Eliminar<a>]
      </td>
      <td><?php echo $f->getCedulaPasaporte(); ?></td>
      <td><?php echo $f->getNombre(); ?></td>
      <td><?php echo $f->getApellido(); ?></td>
      <td><?php echo $f->getEstado(); ?></td>
      <td colspan="2">
        <table border="0" style="width:100%">
          <?php foreach($f->getAreasFormacionFacilitador() as $aff): ?>
          <tr style="text-align:left; height: 15px">
            <td style="width:50%"><?php echo $aff->getAreasFormacion()->getNombreArea(); ?></td>
            <td style="width:50%">
              <?php
                $x = $aff->getEstatus();
                switch ($x)
                {
                  case 0:
                    echo "En Formacion";
                    break;
                  case 1:
                    echo "Formado";
                    break;
                  case 2:
                    echo "Convocado";
                    break;
                  case 3:
                    echo "Activo";
                    break;
                  default:
                    echo "Inactivo";
                }
              ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </td>
  </tr>
  <?php endforeach; ?>
</table>
