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
    <th>Areas de Formacion</th>
  </tr>
  <?php foreach($areasFormPorFacilitador as $af): ?>
  <tr style="height: 30px">
    <td><?php echo $af->getAreasFormacion()->getNombreArea(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>

<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th>Telefonos</th>
  </tr>
  <?php foreach($telefonos as $tels): ?>
  <tr style="height: 30px">
    <td><?php echo $tels->getNumero(); ?></td>
  <tr>
  <?php endforeach; ?>
</table>
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
