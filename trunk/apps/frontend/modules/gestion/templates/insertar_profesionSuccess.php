<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_nivel_formacion_facilitador?id='.$id); ?>'">Regresar</button>
<br/><br/>
<div id="sf_gmstv_container">
  <h1>Profesión del Facilitador</h1>
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
<?php if (isset($profesion_facilitador)){
?>
<th colspan='3'>Lista de Profesiones</th>
</tr>
<tr>
<th>Acciones</th>
<th>Nº</th>
<th>Profesión</th>
</tr>
  </tr>
<?php $cont = 1; foreach($profesion_facilitador as $pf): ?>
  <tr style="height: 30px">
        <td> 
      <?php echo link_to(
  '[Eliminar]',
  'gestion/insertar_profesion?id_profesion='.$pf->getId().'&id='.$id,
  array('method' => 'delete', 'confirm' => 'Seguro Desea Eliminar?')
) ?> 
      </td>
      <td><?php echo $cont ?></td>
      <td><?php echo $pf->getnombre_profesion(); ?></td>
      <?php $cont += 1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no has configurado la(s) Profesión del Facilitador"; 
} ?>
</table>
