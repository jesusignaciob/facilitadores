<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertarcorreo?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Áreas de Formación Facilitador
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateAreasFormacionFacilitador?id='.$id); ?>" method="post">
<table border=0>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['id_area_formacion']->renderLabel(); ?></th>
  <td><?php echo $form['id_area_formacion']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['id_area_formacion']->renderError(); ?></td>
</tr>
<tr>
<th style="text-align:right; height: 30px"><?php echo $form['estatus']->renderLabel(); ?></th>
  <td><?php echo $form['estatus']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['estatus']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Areas de Formación">
<?php echo $form->renderHiddenFields();
echo $form['id_identificacion']->render(array('value'=>$id));
?>

<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertar_nivel_formacion_facilitador?id='.$id); ?>" method="post">
  <input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
  
<?php if (isset($areas_formacion_facilitador)){
?>
<th colspan='4'>Listas de Formación</th>
  </tr>
<tr>
<th>
Acciones
</th>
<th>
Nº
</th>
<th>
Áreas de Formación
</th>
<th>
Estatus
</th>

</tr>
<?php $cont=1; foreach($areas_formacion_facilitador as $aff): ?>
  <tr style="height: 30px">
      <td> 
      <?php echo link_to(
  '[Eliminar]',
  'gestion/insertar_areas_formacion_facilitador?id_area='.$aff->getId().'&id='.$id,
  array('method' => 'delete', 'confirm' => 'Seguro Desea Eliminar?')
) ?> 
      </td>
      <td><?php echo $cont; ?></td>
      <td><?php echo $aff->getAreasFormacion()->getnombre_area(); ?></td>
      <td>
      <?php 
      $estatus=$aff->getestatus(); 
      if ($estatus==0)
      {
		  echo "En fomación";
	  }
	  if ($estatus==1)
      {
		  echo "Formado";
	  }
	  if ($estatus==2)
      {
		  echo "Convocado";
	  }
	  if ($estatus==3)
      {
		  echo "Activo";
	  }
	  if ($estatus==4)
      {
		  echo "Inactivo";
	  }
      ?>    
      </td>
      <?php $cont +=1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no has configurado Áreas de Formación del Facilitador"; 
} ?>
</table>
<?php echo $form->renderGlobalErrors(); ?>
