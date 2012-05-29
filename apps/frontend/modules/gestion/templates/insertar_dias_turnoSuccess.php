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
<tr>
<th>
Horarios
</th>
<th>
Lunes
</th>
<th>
Martes
</th>
<th>
Miércoles
</th>
<th>
Jueves
</th>
<th>
Viernes
</th>
<th>
Sábado
</th>
<th>
Domingo
</th>
</tr>
</th>
<tr>
<th>
7am-8am
</th>
<th>
<input type="checkbox" name="lunes[]" value="7am-8am" ><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="7am-8am"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="7am-8am"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="7am-8am"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="7am-8am"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="7am-8am"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="7am-8am"><br>
</th>
</tr>
<tr>
<tr>
<th>
8am-9am
</th>
<th>
<input type="checkbox" name="lunes[]" value="8am-9am"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="8am-9am"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="8am-9am"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="8am-9am"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="8am-9am"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="8am-9am"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="8am-9am"><br>
</th>
</tr>
<tr>
<th>
9am-10am
</th>
<th>
<input type="checkbox" name="lunes[]" value="9am-10am"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="9am-10am"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="9am-10am"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="9am-10am"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="9am-10am"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="9am-10am"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="9am-10am"><br>
</th>
</tr>
<tr>
<th>
10am-11am
</th>
<th>
<input type="checkbox" name="lunes[]" value="10am-11am"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="10am-11am"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="10am-11am"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="10am-11am"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="10am-11am"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="10am-11am"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="10am-11am"><br>
</th>
</tr>
<tr>
<th>
11am-12pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="11am-12pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="11am-12pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="11am-12pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="11am-12pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="11am-12pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="11am-12pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="11am-12pm"><br>
</th>
</tr>
<tr>
<th>
2pm-3pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="2pm-3pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="2pm-3pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="2pm-3pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="2pm-3pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="2pm-3pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="2pm-3pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="2pm-3pm"><br>
</th>
</tr>
<tr>
<th>
3pm-4pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="3pm-4pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="3pm-4pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="3pm-4pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="3pm-4pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="3pm-4pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="3pm-4pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="3pm-4pm"><br>
</th>
</tr>
<tr>
<th>
5pm-6pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="5pm-6pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="5pm-6pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="5pm-6pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="5pm-6pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="5pm-6pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="5pm-6pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="5pm-6pm"><br>
</th>
</tr>
<tr>
<th>
7pm-8pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="7pm-8pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="7pm-8pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="7pm-8pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="7pm-8pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="7pm-8pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="7pm-8pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="7pm-8pm"><br>
</th>
</tr>
<tr>
<th>
8pm-9pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="8pm-9pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="8pm-9pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="8pm-9pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="8pm-9pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="8pm-9pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="8pm-9pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="8pm-9pm"><br>
</th>
</tr>
<tr>
<th>
9pm-10pm
</th>
<th>
<input type="checkbox" name="lunes[]" value="9pm-10pm"><br>
</th>
<th>
<input type="checkbox" name="martes[]" value="9pm-10pm"><br>
</th>
<th>
<input type="checkbox" name="miercoles[]" value="9pm-10pm"><br>
</th>
<th>
<input type="checkbox" name="jueves[]" value="9pm-10pm"><br>
</th>
<th>
<input type="checkbox" name="viernes[]" value="9pm-10pm"><br>
</th>
<th>
<input type="checkbox" name="sabado[]" value="9pm-10pm"><br>
</th>
<th>
<input type="checkbox" name="domingo[]" value="9pm-10pm"><br>
</th>
</tr>
</table>

<br>
<input type="submit" value="Agregar Turno">
<?php echo $form_turnos->renderHiddenFields(); 
echo $form_turnos['id_identificacion']->render(array('value'=>$id));
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
