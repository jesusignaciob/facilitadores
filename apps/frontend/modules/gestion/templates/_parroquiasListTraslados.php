<select id="disponibilidad_traslado_estado_id_parroquia" name="disponibilidad_traslado_estado[id_parroquia]">
<option value=""></option>
<?php foreach($parroquias as $p): ?>
<option value="<?php echo $p->getId();?>"><?php echo $p->getNombreParroquia(); ?></option>
<?php endforeach; ?>
</select>
