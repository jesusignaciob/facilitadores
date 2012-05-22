<div style="min-height: 300px;">
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('gestion/index'); ?>'"><?php echo image_tag('gestion.png'); ?><br/>
  Gestión
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('estadisticas/index'); ?>'"><?php echo image_tag('estadisticas.png'); ?><br/>
  Estadísticas 
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('configuracion/index'); ?>'"><?php echo image_tag('config.png'); ?><br/>
  Configuración
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('@sf_guard_signout')?>'"><?php echo image_tag('logout.png'); ?><br/>
  Cerrar Sesión
</button>
</div>
