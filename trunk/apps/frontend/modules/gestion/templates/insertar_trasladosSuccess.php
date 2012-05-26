<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_dias_turno?id='.$id); ?>'">Regresar</button>
<form action="<?php echo url_for('gestion/CreateDisponibilidadtraslados?id='.$id); ?>" method="post">
<table style="border: 0">
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
<tr>
  <td><?php echo $form['requiere_traslado']->renderLabel(); ?></td>
  <td><?php echo $form['requiere_traslado']->render(); ?></td>
  <td><?php echo $form['requiere_traslado']->renderError(); ?></td>
</tr>
</table>
<input type="submit">
<?php 
echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
</form>
