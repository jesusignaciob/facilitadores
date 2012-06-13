<button class="home" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('estadisticas/index'); ?>'">Regresar</button>

<div id="dialog-confirm" title="Seleccione el Estatus del facilitador" style="display: none; min-height: 100px;">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Seleccione el Estatus</p>
</div>

<br>
<br>
<div id="sf_gmstv_container">
  <h1>Estadisticas</h1>
  
<form action="<?php echo url_for('estadisticas/porEstado')?>" method="post">
  <table style="border: 0">
    <tr>
      <th style="text-align:right; height: 30px">Estatus</th>
      <td>
        <select id="estatus" name="estatus">
          <option value=""></option>
          <option value="0">En Formacion</option>
          <option value="1">Formado</option>
          <option value="2">Convocado</option>
          <option value="3">Activo</option>
          <option value="4">Inactivo</option>
        </select>
      </td>
     <td>&nbsp</td>
     <td>
       <th style="text-align:right; height: 30px">
       <input type="radio" name="tipo" value="barra" checked>Gráfico de Barras</th>
    </td>
    <td>&nbsp</td>
    <td>   
       <th style="text-align:right; height: 30px">
       <input type="radio" name="tipo" value="circular">Gráfico Circular</th>
    </td>
  </table>
  <input type="submit" value="Generar Grafico">
</form>
<br>
<br>
<P>
  <?php
  $e = 'todos';
  $a = 'todas';
  if (isset($estatusValor)) {
     stOfc::createChart('90%', 450, "@graficos_estadisticas?opcion=1&estatus=$estatusValor&tipografico=$tipo_grafico&estado=$e&area_formacion=$a", false);
  }
  ?>
</P>
</div>