<?php

/*
 *  Document   : estudiosSuccess
 *  Created on : 23/05/2012, 08:56:23 AM
 *  Author     : Jose Orlando Ruiz (joseph2283@gmail.com)
 *  Description:
 */

?>
<button class="back-button" onclick="javascript:parent.location='<?php echo url_for('formacion/index'); ?>'">Regresar</button>
<button class="back-button" onclick="javascript:parent.location='/frontend_dev.php/principal'">Ir al menú Principal</button><br/><br/>
<div id="sf_gmstv_container">
  <h1>Lista de Areas de Formacion</h1> 
<div id="sf_gmstv_bar">    
  <div class="sf_gmstv_filter">
    <form action="<?php echo url_for('formacion/areasFiltro');?>" method="post">
      <table cellspacing="0">
        <tfoot>
          <tr>

            <td colspan="2">           
              <?php echo $filter->renderHiddenFields(); ?>
              <input type="submit" value="Filtrar" />
            </td>
          </tr>
        </tfoot>
        <tbody>
          <?php echo $filter; ?>
        </tbody>
      </table>
    </form>
  </div>
</div>
  <div id="sf_gmstv_content">
    <div class="sf_gmstv_list">
      <table cellspacing="0">
        <thead>

          <tr>
            <th class="sf_gmstv_text" style="min-width: 100px;">Nombre</th>
            <th id="sf_gmstv_list_th_actions">Acciones</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th colspan="4"><?php echo count($areasFormacion); ?> Resultado(s)</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($areasFormacion as $a): ?>
          <tr class="sf_gmstv_row odd">
              <td class="sf_gmstv_text sf_gmstv_list_td_name"><?php echo $a->getNombreArea(); ?></td>
              <td>
                <ul class="sf_gmstv_td_actions">
                  <li class="sf_gmstv_action_edit"><?php echo link_to('Editar','formacion/areasFormacionEditar?id='.$a->getId()); ?></li>
                  <li class="sf_gmstv_action_delete"><?php echo link_to('Eliminar', 'formacion/areasFormacionEliminar?id='.$a->getId(), array('post' => true, 'confirm' => 'estas seguro?')) ?>
</li>
                </ul>
              </td>
           </tr>
           <?php endforeach; ?>
         </tbody>
      </table>
    </div>
    <ul class="sf_gmstv_actions">
      <li class="sf_gmstv_action_new"><?php echo link_to('Nuevo', 'formacion/areasFormacionInsertar'); ?></li>    </ul>
  </div>
</div>
