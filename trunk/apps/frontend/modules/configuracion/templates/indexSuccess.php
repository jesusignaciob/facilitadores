<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</but
ton>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Regresar</button>
<div style="min-height: 300px;">
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('users/index'); ?>'"><?php echo image_tag(''); ?><br/>
  Permisos
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('geografia/index'); ?>'"><?php echo image_tag(''); ?><br/>
  Datos Geográficos 
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('formacion/index')?>'"><?php echo image_tag('
'); ?><br/>
  Datos de formación 
</button>
