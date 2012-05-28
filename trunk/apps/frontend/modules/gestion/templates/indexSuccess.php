<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<div style="min-height: 300px;">
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar'); ?>'"><?php echo image_tag('insertar.png'); ?><br/>
  Inserción
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('gestion/buscar'); ?>'"><?php echo image_tag('buscar.png'); ?><br/>
 Búsqueda 
</button>
</div>

