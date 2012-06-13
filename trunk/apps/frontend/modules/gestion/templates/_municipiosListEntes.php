<select id="ente_id_municipio" name="ente[id_municipio]">
<option value=""></option>
<?php foreach($municipios as $m): ?>
<option value="<?php echo $m->getId();?>"><?php echo $m->getNombreMunicipio(); ?></option>
<?php endforeach; ?>
</select>
