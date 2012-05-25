<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/index'); ?>'">Regresar</button>
<br>
<br>
<form action="<?php echo url_for('gestion/buscar'); ?>" method="post">
  <table style="border: 0">
    <tr>
      <th style="text-align:right; height: 30px"><?php echo $form['nombre']->renderLabel(); ?></th>
      <td><?php echo $form['nombre']->render(); ?></td>
      <td></td>
    </tr>
    <tr>
      <th style="text-align:right; height: 30px"><?php echo $form['apellido']->renderLabel(); ?></th>
      <td><?php echo $form['apellido']->render(); ?></td>
      <td></td>
    </tr>
    <tr>
      <th style="text-align:right; height: 30px"><?php echo $form['cedula_pasaporte']->renderLabel(); ?></th>
      <td><?php echo $form['cedula_pasaporte']->render(); ?></td>
      <td></td>
    </tr>
    <tr>
      <th style="text-align:right; height: 30px"><?php echo $form['id_estado']->renderLabel(); ?></th>
      <td><?php echo $form['id_estado']->render(); ?></td>
      <td><input id="estado" value="" type="hidden"></td>
    </tr>
    <tr>
      <th style="text-align:right; height: 30px"><?php echo $form['id_municipio']->renderLabel(); ?></th>
      <td id="td_municipio"></td>
      <td><input id="municipio" value="" type="hidden"></td>
    </tr>
    <tr>
      <th style="text-align:right; height: 30px"><?php echo $form['id_parroquia']->renderLabel(); ?></th>
      <td id="td_parroquia"></td>
      <td><input id="parroquia" value="" type="hidden"></td>
    </tr>
  </table>
<input type="submit" onclick="cargarFacilitadores($('#estado').val(), $('#municipio').val(), $('#parroquia').val()); return false;" value="Consultar">
<?php echo $form->renderHiddenFields(); ?>
</form>
<br>
<br>
<form action="<?php echo url_for('gestion/modificar'); ?>" method="post">
    <div id="facilitadoresConsultados"></div>
</form>
