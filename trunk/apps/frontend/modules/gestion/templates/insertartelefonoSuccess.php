<?php $id=($sf_params->get ('id')) ?> 
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('principal/index'); ?>'">Ir al menú Principal</button>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('gestion/insertar'); ?>'">Regresar</button>
<br>
<h4>
Configuración de Teléfonos
</h4>
<br>
<form action="<?php echo url_for('gestion/CreateTelefono?id='.$id); ?>" method="post">

<table border=0>
<tr>
  <th style="text-align:right; height: 30px"><?php echo $form['numero']->renderLabel(); ?></th>
  <td><?php echo $form['numero']->render(); ?></td>
  <td style="text-align:left; height: 30px"><?php echo $form['numero']->renderError(); ?></td>
</tr>
</table>
<br>
<input type="submit" value="Agregar Teléfono">
<?php echo $form->renderHiddenFields(); 
echo $form['id_identificacion']->render(array('value'=>$id));
?>
<br>
<br>
</form>
<form action="<?php echo url_for('gestion/insertarcorreo?id='.$id); ?>" method="post">
<input type="submit" value="Siguiente">
</form>
<br>
<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
<?php if (isset($telefonos)){
?>
<th>Nº de Teléfonos</th>
  </tr>
<?php foreach($telefonos as $tf): ?>
  <tr style="height: 30px">
     
      <td><?php echo $tf->getnumero(); ?></td>
      
  </tr>
  <?php endforeach; 
} 
else 
{ 
echo "Aún no haz configurado números de teléfonos"; 
} ?>
</table>

      
  

