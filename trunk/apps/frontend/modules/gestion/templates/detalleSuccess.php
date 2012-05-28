<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/buscar'); ?>'">Regresar</button>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th colspan="2">Datos básicos del facilitador</th>
  </tr>
  <tr>
    <th><?php echo $form['nombre']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getNombre(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['apellido']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getApellido(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['cedula_pasaporte']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getCedulaPasaporte(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['nacionalidad']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getNacionalidad(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['direccion']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getDireccion(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['sector']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getSector(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['situacion_laboral']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getSituacionLaboral(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['formacion_politica']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getFormacionPolitica(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['id_estado']->renderLabel(); ?></th>
    <td><?php echo $facilitador->getEstado(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['id_municipio']->renderLabel(); ?></th>
    <td id="td_municipio"><?php echo $facilitador->getMunicipio(); ?></td>
  </tr>
  <tr>
    <th><?php echo $form['id_parroquia']->renderLabel(); ?></th>
    <td id="td_parroquia"><?php echo $facilitador->getParroquia(); ?></td>
  </tr>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th colspan="2">Areas de Formación</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <th>Estatus</th>
  </tr>
  <?php foreach($areasFormPorFacilitador as $af): ?>
  <tr style="height: 30px">
    <td><?php echo $af->getAreasFormacion()->getNombreArea(); ?></td>
    <td>
      <?php
        $x = $af->getEstatus();
        switch ($x)
        {
          case 0:
            echo "En Formación";
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
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th>Teléfonos</th>
  </tr>
  <?php foreach($telefonos as $tels): ?>
  <tr style="height: 30px">
    <td><?php echo $tels->getNumero(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th>Correos</th>
  </tr>
  <?php foreach($correos as $c): ?>
  <tr style="height: 30px">
    <td><?php echo $c->getCorreo(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th>Profesión</th>
  </tr>
  <?php foreach($facilitador->getProfesion() as $profesion): ?>
  <tr style="height: 30px">
    <td><?php echo $profesion->getNombreProfesion(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th>Ocupación</th>
  </tr>
  <?php foreach($facilitador->getOcupacion() as $ocupacion): ?>
  <tr style="height: 30px">
    <td><?php echo $ocupacion->getNombreOcupacion(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th>Nivel de Formación</th>
  </tr>
  <?php foreach($facilitador->getNivelFormacion() as $nivel): ?>
  <tr style="height: 30px">
    <td><?php echo $nivel->getEstudios()->getNombreEstudio(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th colspan="3">Disponibilidad de Traslado</th>
  </tr>
  <tr>
    <th>Estado</th>
    <th>Municipio</th>
    <th>Requiere Traslado</th>
  </tr>
  <?php foreach($facilitador->getDisponibilidadTrasladoEstado() as $disponibilidad): ?>
  <tr style="height: 30px">
    <td><?php echo $disponibilidad->getEstado(); ?></td>
    <td><?php echo $disponibilidad->getMunicipio(); ?></td>
    <td>
      <?php
        $x = $disponibilidad->getRequiereTraslado();
        switch ($x)
        {
          case 0:
            echo "No";
            break;
          case 1:
            echo "Si";
            break;
                }
      ?>
    </td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th colspan="3">Secciones</th>
  </tr>
  <tr>
    <th>Area de Formación</th>
    <th>Sección</th>
    <th>Ente</th>
  </tr>
  <?php foreach($facilitador->getSecciones() as $seccion): ?>
  <tr style="height: 30px">
    <td><?php echo $seccion->getAreasFormacion()->getNombreArea(); ?></td>
    <td><?php echo $seccion->getNombreSeccion(); ?></td>
    <td><?php echo $seccion->getNombreEnte(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
<br>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th colspan="4">Disponibilidad Diaria</th>
  </tr>
  <tr>
  <?php foreach($facilitador->getDisponibilidadDias() as $dia): ?>
    <th><?php echo $dia->getDia(); ?></th>
  <?php endforeach; ?>
  </tr>
  <tr style="height: 30px">
  <?php foreach($facilitador->getDisponibilidadDias() as $dia): ?>
    <td>
      <?php foreach($dia->getDisponibilidadTurnos() as $turno): ?>
        <?php echo $turno->getTurno(); ?><br>
      <?php endforeach; ?>
    </td>
  <?php endforeach; ?>
  <tr>
</table>