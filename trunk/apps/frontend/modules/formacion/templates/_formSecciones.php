<?php

/*
 *  Document   : _form
 *  Created on : 23/05/2012, 03:40:53 PM
 *  Author     : jruiz
 *  Description:
 */

?>
 <form method="post" action="<?php echo url_for('formacion/secciones'.($form->getObject()->isNew() ?
'Crear' : 'Modificar').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>">
    <fieldset id="sf_fieldset_usuario">
        <div class="sf_gmstv_form_row sf_gmstv_text">
            <?php echo $form['id_area_formacion']->renderError(); ?>
        <div>
          <?php echo $form['id_area_formacion']->renderLabel(); ?>
          <?php echo $form['id_area_formacion']->render(); ?>
        </div>
        </div>
        <div class="sf_gmstv_form_row sf_gmstv_text">
            <?php echo $form['id_ente']->renderError(); ?>
        <div>
          <?php echo $form['id_ente']->renderLabel(); ?>
          <?php echo $form['id_ente']->render(); ?>
        </div>
        </div>
        <div class="sf_gmstv_form_row sf_gmstv_text">
            <?php echo $form['nombre_seccion']->renderError(); ?>
        <div>
          <?php echo $form['nombre_seccion']->renderLabel(); ?>
          <?php echo $form['nombre_seccion']->render(); ?>
        </div>
        </div>
  </fieldset>


    <ul class="sf_gmstv_actions">
      <?php echo $form->renderHiddenFields(); ?>
      <?php if (!$form->getObject()->isNew()): ?>
      <li class="sf_gmstv_action_delete"><?php echo link_to('Eliminar', 'formacion/seccionesEliminar?id='.$form->getObject()->getId(), array('method' => 'delete','confirm' => 'estas seguro?')) ?></li>
      <?php endif; ?>
      <li class="sf_gmstv_action_list"><?php echo link_to('Volver','formacion/secciones');?></li>
      <li class="sf_gmstv_action_save"><input type="submit" value="Guardar" /></li>
    </ul>
  </form>