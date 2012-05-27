<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('configuracion/index'); ?>'">Regresar</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<div style="min-height: 300px;">
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('guard/groups'); ?>'"><?php echo image_tag('groups.png'); ?><br/>
  Grupos
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('guard/permissions'); ?>'"><?php echo image_tag('permissions.png'); ?><br/>
  Permisos
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('guard/users')?>'"><?php echo image_tag('user+.png'); ?><br/>
  Usuarios
</button>
</div>