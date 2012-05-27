<?php

/*
 *  Document   : asignarSessionesSuccess
 *  Created on : 23/05/2012, 10:39:10 AM
 *  Author     : Jose Orlando Ruiz (joseph2283@gmail.com)
 *  Description:
 */

?>
<div id="sf_gmstv_container">
  <h1>Asignar Secciones</h1>
  
  <?php if($sf_user->hasFlash('error')): ?> 
    <div class="error"><?php echo $sf_user->getFlash('error'); ?> </div>
  <?php endif; ?>

  <div id="sf_gmstv_header">
  </div>

  <div id="sf_gmstv_content">
    <div class="sf_gmstv_form">
      
      <form method="post" action="<?php echo url_for('formacion/asignarSeccionesUpdate'); ?>">
    <fieldset id="sf_fieldset_usuario">
        <div class="sf_gmstv_form_row sf_gmstv_text">
          <!-- aqui va el render error -->
        <div>
          Secciones<!-- aqui va el render label -->
          <!-- aqui va el render -->
          <select name="seccion">
            <option value=""></option>
            <?php foreach($secciones as $s):?>
            <?php $p = $s->getIdentificacion();?>
            <option value="<?php echo $s->getId()?>"><?php echo $s->getNombre()?> - <?php echo $p->getNombre()." ".$p->getApellido(); ?></option>
            <?php endforeach; ?>
          </select>
          <input type="hidden" name="id" value="<?php echo $sf_request->getParameter('id')?>">
        </div>
        </div>
  </fieldset>


    <ul class="sf_gmstv_actions">
      <li class="sf_gmstv_action_save"><input type="submit" value="Guardar" /></li>
    </ul>
  </form>
    </div>
    
    
    <!-----------------------------Listado----------------------------------->
    
    <div class="sf_gmstv_list">
      <table cellspacing="0">
        <thead>

          <tr>
            <th class="sf_gmstv_text" style="min-width: 100px;">Nombre</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th colspan="4"><?php echo count($asignados); ?> Resultado(s)</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($asignados as $a): ?>
          <tr class="sf_gmstv_row odd">
              <td class="sf_gmstv_text sf_gmstv_list_td_name"><?php echo $a->getNombreSeccion(); ?></td>
           </tr>
           <?php endforeach; ?>
         </tbody>
      </table>
    </div>   
    
  </div>
</div>