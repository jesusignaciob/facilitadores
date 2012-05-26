<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar_ocupacion?id='.$id); ?>'">Regresar</button>
<br>
<h4>
Configuración de Turnos Disponibles
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateTurnoDisponible?id='.$id); ?>" method="post">

<table border=1>
  <?php $form['turno']->renderLabel(); ?>
  <?php $form['turno']->render(); ?>
  <?php $form['turno']->renderError(); ?>
<tr>
<th>
Turnos
</th>
<th colspan='6'>
Días
</th>
</tr>
<tr>
<th>
<input  type='checkbox'>7am-8am
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input  type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>8am-9am
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>9am-10am
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>10am-11am
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>11am-12pm
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>2pm-3pm
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>3pm-4pm
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>4pm-5pm
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>
<tr>
<th>
<input type='checkbox'>5pm-6pm
</th>
<th>
<input type='checkbox'>Lunes
</th>
<th>
<input type='checkbox'>Martes
</th>
<th>
<input type='checkbox'>Miercoles
</th>
<th>
<input type='checkbox'>Jueves
</th>
<th>
<input type='checkbox'>Viernes
</th><th>
<input type='checkbox'>Sábado
</th>
</tr>

</table>
<input type="submit">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
</form>
<form action="<?php echo url_for('gestion/insertar_traslados?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
<?php $dias_turno; if (isset($dias_turno)){
?>
<th colspan='2'>Turnos Disponibles Facilitador</th>
</tr>
<tr><th>Nº</th>
<th>Turnos</th></tr>
  </tr>
<?php $cont = 1; foreach($dias_turno as $dt): ?>
  <tr style="height: 30px">
      <td><?php echo $cont ?></td>
      <td><?php //echo $pf->getnombre_profesion(); ?></td>
      <?php $cont += 1; ?>
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado Turnos Disponibles Facilitador"; 
} ?>
</table>
