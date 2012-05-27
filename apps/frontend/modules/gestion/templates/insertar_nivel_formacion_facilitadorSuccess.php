<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_areas_formacion_facilitador?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Nivel de Formación Facilitador
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateNivelFormacionFacilitador?id='.$id); ?>" method="post">
<table border=0>
<tr>
<th style="text-align:right; height: 30px"><?php echo $form['id_estudios']->renderLabel(); ?></th>
<td><?php echo $form['id_estudios']->render(); ?></td>
<td style="text-align:left; height: 30px"><?php echo $form['id_estudios']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Formación">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertar_profesion?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
<?php if (isset($nivel_formacion_facilitador)){
?>
<th colspan='2'>Lista Nivel de Formación</th>
  </tr>
<tr>
<th>
Nº
</th>
<th>
Nivel de Formación
</th>
</tr>
<?php $cont=1; foreach($nivel_formacion_facilitador as $nff): ?>
  <tr style="height: 30px">
      <td><?php echo $cont; ?></td>
      <td><?php echo $nff->getEstudios()->getnombre_estudio(); ?></td>
      <?php $cont +=1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado Nivel de Formación del Facilitador"; 
} ?>
</table>