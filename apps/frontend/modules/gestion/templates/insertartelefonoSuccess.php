<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar'); ?>'">Regresar</button>
<form action="<?php echo url_for('gestion/CreateTelefono?id='.$id); ?>" method="post">

<table border=1>
<tr>
  <td><?php echo $form['numero']->renderLabel(); ?></td>
  <td><?php echo $form['numero']->render(); ?></td>
  <td><?php echo $form['numero']->renderError(); ?></td>
</tr>
</table>
<input type="submit">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
</form>
<form action="<?php echo url_for('gestion/insertarcorreo?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>

