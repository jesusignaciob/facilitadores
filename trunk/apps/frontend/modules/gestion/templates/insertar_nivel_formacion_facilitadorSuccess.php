<?php $id=($sf_params->get ('id')) ?> 
<button class="home" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_areas_formacion_facilitador?id='.$id); ?>'">Regresar</button>
<button class="forward-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_profesion?id='.$id); ?>'">Siguiente</button>
<br/><br/>
<div id="sf_gmstv_container">
  <h1>Nivel de Formación del Facilitador</h1>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr>
    <th colspan="2">Datos básicos del facilitador</th>
  </tr>
  <tr>
    <th><label>Nombre</label></th>
    <td><?php echo $facilitador->getNombre(); ?></td>
  </tr>
  <tr>
    <th><label>Apellido</label></th>
    <td><?php echo $facilitador->getApellido(); ?></td>
  </tr>
  <tr>
    <th><label>Cedula o Pasaporte</label></th>
    <td><?php echo $facilitador->getCedulaPasaporte(); ?></td>
  </tr>
</table>
<br>
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
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
<?php if (isset($nivel_formacion_facilitador)){
?>
<th colspan='3'>Lista Nivel de Formación</th>
  </tr>
<tr>
<th>
Acciones
</th>
<th>
Nº
</th>
<th>
Nivel de Formación
</th>
</tr>
<?php $cont=1; foreach($nivel_formacion_facilitador as $nff): ?>
  <tr style="height: 30px">
       <td> 
      <?php echo link_to(
  '[Eliminar]',
  'gestion/insertar_nivel_formacion_facilitador?id_formacion='.$nff->getId().'&id='.$id,
  array('method' => 'delete', 'confirm' => 'Seguro Desea Eliminar?')
) ?> 
      </td>
      <td><?php echo $cont; ?></td>
      <td><?php echo $nff->getEstudios()->getnombre_estudio(); ?></td>
      <?php $cont +=1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no has configurado los Niveles de Formación del Facilitador"; 
} ?>
</table>
