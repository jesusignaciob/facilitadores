<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertartelefono?id='.$id); ?>'">Regresar</button>
<form action="<?php echo url_for('gestion/CreateCorreo?id='.$id); ?>" method="post">
<table border=1>

<tr>
  <td><?php echo $form['correo']->renderLabel(); ?></td>
  <td><?php echo $form['correo']->render(); ?></td>
  <td><?php echo $form['correo']->renderError(); ?></td>
</tr>
</table>
<input type="submit">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
</form>
<form action="<?php echo url_for('gestion/insertar_areas_formacion_facilitador?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
