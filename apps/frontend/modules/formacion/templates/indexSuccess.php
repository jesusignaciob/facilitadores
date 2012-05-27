<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('configuracion/index'); ?>'">Regresar</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<div style="min-height: 300px;">
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('formacion/estudios'); ?>'"><?php echo image_tag(''); ?><br/>
  Estudios
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('formacion/areasFormacion'); ?>'"><?php echo image_tag(''); ?><br/>
  Areas
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('formacion/entes')?>'"><?php echo image_tag(''); ?><br/>
  Entes
</button>
  <button class="cajaicono" onclick="javascript:parent.location='<?php echo url_for('formacion/secciones')?>'"><?php echo image_tag(''); ?><br/>
  Secciones
</button>
</div>