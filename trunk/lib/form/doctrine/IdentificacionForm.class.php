<?php

/**
 * Identificacion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IdentificacionForm extends BaseIdentificacionForm
{
  public function configure()
  {
          $this->widgetSchema->setLabels(array(
          'id_estado'    => 'Estado',
          'id_municipio'   => 'Municipio',
          'id_parroquia' => 'Parroquia',
        ));
        
        $this->widgetSchema['id_estado'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true));

  }
}