<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_profesion?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Ocupación
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateOcupacion?id='.$id); ?>" method="post">

<table border=0>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['nombre_ocupacion']->renderLabel(); ?></th>
  <td><?php echo $form['nombre_ocupacion']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['nombre_ocupacion']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Ocupación">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertar_dias_turno?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
<?php if (isset($ocupacion_facilitador)){
?>
<th>Ocupación del Facilitador</th>
  </tr>
<?php foreach($ocupacion_facilitador as $pf): ?>
  <tr style="height: 30px">
     
      <td><?php echo $pf->getnombre_ocupacion(); ?></td>
      
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado Ocupación del Facilitador"; 
} ?>
</table>
