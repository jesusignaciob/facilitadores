  <input id="nombre_seccion" type="hidden" value="<?php echo $nombre_seccion; ?>" />
  <input id="estado" type="hidden" value="<?php echo $estado; ?>" />
  <input id="municipio" type="hidden" value="<?php echo $municipio; ?>" />
  <input id="parroquia" type="hidden" value="<?php echo $parroquia; ?>" />
  <input id="ente" type="hidden" value="<?php echo $ente; ?>" />
  <input id="area" type="hidden" value="<?php echo $area; ?>" />

<table border="1" style="border-collapse:collapse; width: 100%">
  <tr style="height: 30px">
      <th >Acciones</th>
      <th >Nombre</th>
      <th >Área</th>
      <th >Ente</th>
      <th >Facilitador Asignado</th>
      </tr>
  <?php foreach($secciones as $s): ?>
  <tr style="height: 30px">
      <td>
          <!--[<a href="<?php echo url_for('gestion/asignar_secciones_facilitador?id='.$s->getId().'&nombre='.$nombre_seccion.'&estado='.$estado.'&municipio='.$municipio.'&parroquia='.$parroquia.'&ente='.$ente.'&area='.$area) ?>">Buscar Facilitadores<a>]-->
          [<a href="<?php echo url_for('gestion/asignar_secciones_facilitador?id_seccion='.$s->getId().'&area='.$s->getAreasFormacion()->getNombreArea()) ?>">Buscar Facilitadores<a>]
       </td>

      <td><?php echo $s->getNombreSeccion(); ?></td>
      <td><?php echo $s->getAreasFormacion()->getNombreArea(); ?></td>
     <td><?php echo $s->getEnte()->getNombreEnte(); ?></td>
     <td><?php
      if (($s->getIdentificacion()->getNombre()==NULL)&&($s->getIdentificacion()->getApellido()==NULL))
      {
      echo "Sección sin Facilitador Asignado";
      }
      else
      {
 echo $s->getIdentificacion()->getNombre()." ".$s->getIdentificacion()->getApellido(); 
      }
      ?></td>
  </tr>
  <?php endforeach; ?>
</table>
