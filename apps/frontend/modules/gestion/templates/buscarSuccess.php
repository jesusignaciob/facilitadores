<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/index'); ?>'">Regresar</button>
<br>
<br>
<form action="<?php echo url_for('gestion/buscar'); ?>" method="post">
<table style="border: 0">
<tr>
<td><?php echo $form['nombre']->renderLabel(); ?></td>
<td><?php echo $form['nombre']->render(); ?></td>
<td></td>
</tr>
<tr>
  <td><?php echo $form['apellido']->renderLabel(); ?></td>
  <td><?php echo $form['apellido']->render(); ?></td>
  <td></td>
</tr>
<tr>
  <td><?php echo $form['cedula_pasaporte']->renderLabel(); ?></td>
  <td><?php echo $form['cedula_pasaporte']->render(); ?></td>
  <td></td>
</tr>
<tr>
  <td><?php echo $form['id_estado']->renderLabel(); ?></td>
  <td><?php echo $form['id_estado']->render(); ?></td>
  <td></td>
</tr>
<tr>
  <td><?php echo $form['id_municipio']->renderLabel(); ?></td>
  <td id="td_municipio"></td>
  <td></td>
</tr>
<tr>
  <td><?php echo $form['id_parroquia']->renderLabel(); ?></td>
  <td id="td_parroquia"></td>
  <td></td>
</tr>
</table>
<input type="submit" onclick="cargarFacilitadores(); return false;" value="Consultar">
<?php echo $form->renderHiddenFields(); ?>
</form>
<br>
<br>
<form action="<?php echo url_for('gestion/modificar'); ?>" method="post">
    <div id="facilitadoresConsultados"></div>
</form>
