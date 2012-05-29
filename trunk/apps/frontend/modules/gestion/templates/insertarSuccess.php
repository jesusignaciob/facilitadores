<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/index'); ?>'">Regresar</button>

<br>
<br>
<form action="<?php echo url_for('gestion/create'); ?>" method="post">
<table style="border: 0">
<tr><th colspan="3">Datos Basicos del Facilitador</th></tr>
<tr><th colspan="3"><br></th></tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['nombre']->renderLabel(); ?></th>
  <td><?php echo $form['nombre']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['nombre']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['apellido']->renderLabel(); ?></th>
  <td><?php echo $form['apellido']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['apellido']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['cedula_pasaporte']->renderLabel(); ?></th>
  <td><?php echo $form['cedula_pasaporte']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['cedula_pasaporte']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['nacionalidad']->renderLabel(); ?></th>
  <td><?php echo $form['nacionalidad']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['nacionalidad']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['direccion']->renderLabel(); ?></th>
  <td><?php echo $form['direccion']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['direccion']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['sector']->renderLabel(); ?></th>
  <td><?php echo $form['sector']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['sector']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['situacion_laboral']->renderLabel(); ?></th>
  <td><?php echo $form['situacion_laboral']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['situacion_laboral']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['formacion_politica']->renderLabel(); ?></th>
  <td><?php echo $form['formacion_politica']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['formacion_politica']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['id_estado']->renderLabel(); ?></th>
  <td><?php echo $form['id_estado']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['id_estado']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['id_municipio']->renderLabel(); ?></th>
  <td id="td_municipio"></td>
  <td style="text-align:left; height: 30px"><?php echo $form['id_municipio']->renderError(); ?></td>
</tr>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['id_parroquia']->renderLabel(); ?></th>
  <td id="td_parroquia"></td>
  <td style="text-align:left; height: 30px"><?php echo $form['id_parroquia']->renderError(); ?></td>
</tr>
</table>
<input type="submit" value="Insertar">
<?php echo $form->renderHiddenFields(); ?>
<?php echo $form->renderGlobalErrors(); ?>
</form>
