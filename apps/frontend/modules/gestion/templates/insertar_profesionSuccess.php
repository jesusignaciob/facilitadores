<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_nivel_formacion_facilitador?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Profesión
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateProfesion?id='.$id); ?>" method="post">

<table border=1>
<tr>
  <td><?php echo $form['nombre_profesion']->renderLabel(); ?></td>
  <td><?php echo $form['nombre_profesion']->render(); ?></td>
  <td><?php echo $form['nombre_profesion']->renderError(); ?></td>
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

