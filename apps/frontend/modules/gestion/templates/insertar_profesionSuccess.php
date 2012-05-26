<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_nivel_formacion_facilitador?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Profesión Facilitador
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateProfesion?id='.$id); ?>" method="post">

<table border=0>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['nombre_profesion']->renderLabel(); ?></th>
  <td><?php echo $form['nombre_profesion']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['nombre_profesion']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Profesión">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertar_ocupacion?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
<?php if (isset($profesion_facilitador)){
?>
<th colspan='2'>Lista de Profesiones</th>
</tr>
<tr><th>Nº</th>
<th>Profesión</th></tr>
  </tr>
<?php $cont = 1; foreach($profesion_facilitador as $pf): ?>
  <tr style="height: 30px">
      <td><?php echo $cont ?></td>
      <td><?php echo $pf->getnombre_profesion(); ?></td>
      <?php $cont += 1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado Profesión del Facilitador"; 
} ?>
</table>
