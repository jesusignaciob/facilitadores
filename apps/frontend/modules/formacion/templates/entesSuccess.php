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
  <h1>Lista de Entes</h1>
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
            <th colspan="4"><?php echo count($entes); ?> Resultado(s)</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($entes as $e): ?>
          <tr class="sf_gmstv_row odd">
              <td class="sf_gmstv_text sf_gmstv_list_td_name"><?php echo $e->getNombreEnte(); ?></td>
              <td>
                <ul class="sf_gmstv_td_actions">
                  <li class="sf_gmstv_action_edit"><?php echo link_to('Editar','formacion/entesEditar?id='.$e->getId()); ?></li>
                  <li class="sf_gmstv_action_delete"><?php echo link_to('Eliminar', 'formacion/entesEliminar?id='.$e->getId(), array('post' => true, 'confirm' => 'estas seguro?')) ?>
</li>
                </ul>
              </td>
           </tr>
           <?php endforeach; ?>
         </tbody>
      </table>
    </div>
    <ul class="sf_gmstv_actions">
      <li class="sf_gmstv_action_new"><?php echo link_to('Nuevo', 'formacion/entesInsertar'); ?></li>    </ul>
  </div>
</div>
