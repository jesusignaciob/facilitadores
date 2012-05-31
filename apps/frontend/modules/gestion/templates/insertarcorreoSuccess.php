<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertartelefono?id='.$id); ?>'">Regresar</button>
<br/><br/>
<div id="sf_gmstv_container">
  <h1>Correos Electrónicos del Facilitador</h1>
<br>
<form action="<?php echo url_for('gestion/CreateCorreo?id='.$id); ?>" method="post">
<table border=0>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['correo']->renderLabel(); ?></th>
  <td><?php echo $form['correo']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['correo']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Correo">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertar_areas_formacion_facilitador?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
<?php if (isset($correos)){
?>
<th colspan='3'>Lista Correos Electrónicos</th>
  </tr>
<tr>
<th>
Nº
</th>
<th>
Correos Electrónicos
</th>
<th>
Acciones
</th>
</tr>
<?php $cont=1; foreach($correos as $cf): ?>
  <tr style="height: 30px">
      <td> 
      <?php echo link_to(
  '[Eliminar]',
  'gestion/insertarcorreo?id_correo='.$cf->getId().'&id='.$id,
  array('method' => 'delete', 'confirm' => 'Seguro Desea Eliminar?')
) ?> 
      </td>
      <td><?php echo $cont; ?></td>
      <td><?php echo $cf->getcorreo(); ?></td>
      <?php $cont +=1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no has configurado los correos electrónicos del facilitador"; 
} ?>
</table>
