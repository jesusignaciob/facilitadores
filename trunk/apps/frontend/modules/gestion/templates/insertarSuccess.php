<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/index'); ?>'">Regresar</button>
<form action="<?php echo url_for('gestion/create'); ?>" method="post">
<table border=1>
<tr>
<td><?php echo $form['nombre']->renderLabel(); ?></td>
<td><?php echo $form['nombre']->render(); ?></td>
<td><?php echo $form['nombre']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['apellido']->renderLabel(); ?></td>
  <td><?php echo $form['apellido']->render(); ?></td>
  <td><?php echo $form['apellido']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['cedula_pasaporte']->renderLabel(); ?></td>
  <td><?php echo $form['cedula_pasaporte']->render(); ?></td>
  <td><?php echo $form['cedula_pasaporte']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['nacionalidad']->renderLabel(); ?></td>
  <td><?php echo $form['nacionalidad']->render(); ?></td>
  <td><?php echo $form['nacionalidad']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['direccion']->renderLabel(); ?></td>
  <td><?php echo $form['direccion']->render(); ?></td>
  <td><?php echo $form['direccion']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['sector']->renderLabel(); ?></td>
  <td><?php echo $form['sector']->render(); ?></td>
  <td><?php echo $form['sector']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['situacion_laboral']->renderLabel(); ?></td>
  <td><?php echo $form['situacion_laboral']->render(); ?></td>
  <td><?php echo $form['situacion_laboral']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['formacion_politica']->renderLabel(); ?></td>
  <td><?php echo $form['formacion_politica']->render(); ?></td>
  <td><?php echo $form['formacion_politica']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['id_estado']->renderLabel(); ?></td>
  <td><?php echo $form['id_estado']->render(); ?></td>
  <td><?php echo $form['id_estado']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['id_municipio']->renderLabel(); ?></td>
  <td id="td_municipio"></td>
  <td><?php echo $form['id_municipio']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['id_parroquia']->renderLabel(); ?></td>
  <td id="td_parroquia"></td>
  <td><?php echo $form['id_parroquia']->renderError(); ?></td>
</tr>
</table>
<input type="submit">
<?php echo $form->renderHiddenFields(); ?>
</form>
