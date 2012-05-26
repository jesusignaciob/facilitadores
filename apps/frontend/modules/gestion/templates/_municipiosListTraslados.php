<select id="disponibilidad_traslado_estado_id_municipio" name="disponibilidad_traslado_estado[id_municipio]">
<option value=""></option>
<?php foreach($municipios as $m): ?>
<option value="<?php echo $m->getId();?>"><?php echo $m->getNombreMunicipio(); ?></option>
<?php endforeach; ?>
</select>
