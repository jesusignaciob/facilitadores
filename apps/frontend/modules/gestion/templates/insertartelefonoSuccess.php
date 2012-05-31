<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar'); ?>'">Regresar</button>
<div id="dialog-confirm" title="Eliminar Teléfono" style="display: none; min-height: 100px;">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>¿Esta seguro de eliminar el teléfono?</p>
</div>
<br/><br/>
<div id="sf_gmstv_container">
  <h1>Teléfonos del Facilitador</h1> 
<form action="<?php echo url_for('gestion/CreateTelefono?id='.$id); ?>" method="post">
<table border=0>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['numero']->renderLabel(); ?></th>
  <td><?php echo $form['numero']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['numero']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Teléfono">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertarcorreo?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
<?php $cont=1; if (isset($telefonos)){
?>
<tr>
<th colspan='3'>Lista de Teléfonos</th>
</tr>
<tr>
<th>
Acciones
</th>
<th>
Nº
</th>
<th>
Nº de Teléfonos
</th>
</tr>
<?php foreach($telefonos as $tf): ?>
     <tr style="height: 30px">
      <td> 
      <?php echo link_to(
  '[Eliminar]',
  'gestion/insertartelefono?id_telefono='.$tf->getId().'&id='.$id,
  array('method' => 'delete', 'confirm' => 'Seguro Desea Eliminar?')
) ?> 
      </td>
      <td><?php echo $cont; ?> </td>
      <td><?php echo $tf->getnumero(); ?></td>
      
      <?php $cont+=1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no has agregado números de teléfono del facilitador"; 
} ?>
</table>
</div>
      
  

