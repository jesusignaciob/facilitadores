<button class="home" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('estadisticas/index'); ?>'">Regresar</button>

<div id="dialog-confirm" title="Eliminar Facilitador" style="display: none; min-height: 100px;">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>¿Esta seguro de eliminar al Facilitador?</p>
</div>

<br>
<br>
<div id="sf_gmstv_container">
  <h1>Estadisticas</h1>
  
<form action="." method="post">
  <table style="border: 0">
    <tr>
      <th style="text-align:right; height: 30px">Estatus</th>
      <td>
        <select id="estatus">
          <option value=""></option>
          <option value="0">En Formacion</option>
          <option value="1">Formado</option>
          <option value="2">Convocado</option>
          <option value="3">Activo</option>
          <option value="4">Inactivo</option>
        </select>
      </td>
      <td><input id="estatusAreaFormacion" value="" type="hidden"></td>
    </tr>
  </table>
  <input type="submit" value="Generar Grafico" onclick="var path='<?php echo url_for('estadisticas/porEstado'); ?>/estatusAreaFormacion/' + javascript:obtenerValorEstatus(); javascript:parent.location=path; return false;">
</form>
<br>
<br>
<P>
  <?php
  if (isset($estatusValor)) {
    //echo '@grafico_por_estados?estatus=$estatusValor';
    stOfc::createChart('90%', 450, '@grafico_por_estados?estatus=$estatusValor', false); 
  }
  ?>
</P>
</div>
