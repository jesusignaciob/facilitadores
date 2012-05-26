<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertarcorreo?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Áreas de Formación
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateAreasFormacionFacilitador?id='.$id); ?>" method="post">
<table border=1>
<tr>
<td><?php echo $form['id_area_formacion']->renderLabel(); ?></td>
<td><?php echo $form['id_area_formacion']->render(); ?></td>
<td><?php echo $form['id_area_formacion']->renderError(); ?></td>
</tr>
</table>
<input type="submit">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
echo $form['id_identificacion']->render(array('value'=>$id));
?>
</form>
<form action="<?php echo url_for('gestion/insertar_nivel_formacion_facilitador?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
<?php if (isset($areas_formacion_facilitador)){
?>
<th>Áreas de Formación del Facilitador</th>
  </tr>
<?php foreach($areas_formacion_facilitador as $aff): ?>
  <tr style="height: 30px">
     
      <td><?php echo $aff->getAreasFormacion()->getnombre_area(); ?></td>
      
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado Áreas de Formación del Facilitador"; 
} ?>
</table>
