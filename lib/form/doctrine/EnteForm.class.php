<?php

/**
 * Ente form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EnteForm extends BaseEnteForm
{
  public function configure()
  {
    
    $this->widgetSchema['id_estado'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true));

    $this->widgetSchema->setLabels(array(
    'id_estado'    => 'Estado',
    'id_municipio'   => 'Municipio',
    'id_parroquia' => 'Parroquia',
    ));

	$this->validatorSchema['id_estado'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'required' => true), array('required'=> "Seleccione el Estado"));
	$this->validatorSchema['id_municipio'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'required' => true), array('required'=> "Seleccione el Municipio"));
	 $this->validatorSchema['id_parroquia'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'required' => true), array('required'=> "Seleccione la Parroquia"));
	 
  }
}
