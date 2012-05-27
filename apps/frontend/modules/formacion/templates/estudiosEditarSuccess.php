<?php

/*
 *  Document   : estudiosInsertarSuccess
 *  Created on : 23/05/2012, 10:39:10 AM
 *  Author     : Jose Orlando Ruiz (joseph2283@gmail.com)
 *  Description:
 */

?>
<div id="sf_gmstv_container">
  <h1>Editar estudio</h1>
  
  <?php if($form->hasGlobalErrors()): ?> 
    <?php echo $form->renderGlobalErrors();?>
  <?php endif; ?>

  <div id="sf_gmstv_header">
  </div>

  <div id="sf_gmstv_content">
    <div class="sf_gmstv_form">
        <?php include_partial('formacion/form', array('form' => $form)); ?>
    </div>
  </div>
</div>