<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_dias_turno?id='.$id); ?>'">Regresar</button>
<br/><br/>
<div id="sf_gmstv_container">
  <h1>Traslados del Facilitador</h1>
<br>
<form action="<?php echo url_for('gestion/CreateDisponibilidadtraslados?id='.$id); ?>" method="post">
<table style="border: 0">
<tr>
  <td><?php echo $form['id_estado']->renderLabel(); ?></td>
  <td><?php echo $form['id_estado']->render(); ?></td>
  <td><?php echo $form['id_estado']->renderError(); ?></td>
</tr>
<tr>
  <td><?php echo $form['id_municipio']->renderLabel(); ?></td>
  <td id="td_municipio_traslado"></td>
  <td><?php echo $form['id_municipio']->renderError(); ?></td>
</tr>

<tr>
  <td><?php echo $form['requiere_traslado']->renderLabel(); ?></td>
  <td><?php echo $form['requiere_traslado']->render(); ?></td>
  <td><?php echo $form['requiere_traslado']->renderError(); ?></td>
</tr>
<input type="hidden" id="url_mun" value="<?php echo url_for("gestion/cargarMunicipiosTraslados")?>">
<input type="hidden" id="url_par" value="<?php echo url_for("gestion/cargarParroquiasTraslados")?>">
</table>
<input type="submit" value="Agregar Traslados">
<?php 
echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
</form>
<form action="<?php echo url_for('gestion/asignarSecciones?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
<?php $cont=1; if (isset($traslados_facilitador)){
?>
<tr>
<th colspan='6'>Lista de Traslados</th>
</tr>
<tr>
<th>
Acciones
</th>
<th>
Nº
</th>
<th>
Estado
</th>
<th>
Mucnicipio
</th>
<th>
Requiere Traslado
</th>
</tr>
<?php foreach($traslados_facilitador as $tf): ?>
     <tr style="height: 30px">
       <td> 
      <?php echo link_to(
  '[Eliminar]',
  'gestion/insertar_traslados?id_traslado='.$tf->getId().'&id='.$id,
  array('method' => 'delete', 'confirm' => 'Seguro Desea Eliminar?')
) ?> 
      </td> 
      <td><?php echo $cont; ?> </td>
      <td><?php echo $tf->getEstado()->getnombre_estado(); ?></td>
      <td><?php echo $tf->getMunicipio()->getnombre_municipio(); ?></td>
      <td>
      <?php 
      $requiere=$tf->getrequiere_traslado(); 
      if($requiere==1)
      {
		echo "Si";
	  }
	  else
	  {
		  echo "No";
	  }
      ?>
      </td>
      <?php $cont+=1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado traslados facilitadores"; 
} ?>
</table>
