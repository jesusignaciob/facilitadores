<select id="identificacion_id_parroquia" name="identificacion[id_parroquia]">
<option value=""></option>
<?php foreach($parroquias as $p): ?>
<option value="<?php echo $p->getId();?>"><?php echo $p->getNombreParroquia(); ?></option>
<?php endforeach; ?>
</select>
