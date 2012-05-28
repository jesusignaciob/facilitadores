<?php

/**
 * NivelFormacion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NivelFormacionForm extends BaseNivelFormacionForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
	
	  $this->validatorSchema['id_estudios'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estudios'), 'required' => true), array('required'=> "Seleccione el estudio"));
	
	
	  $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'NivelFormacion', 'column' => array('id_estudios','id_identificacion')), array('invalid'=> "Nivel de Formación ya fue asignada al Facilitador")),
)));
  }
}
