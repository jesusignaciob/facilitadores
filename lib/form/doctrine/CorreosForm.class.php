<?php

/**
 * Correos form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CorreosForm extends BaseCorreosForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
	  $this->validatorSchema['correo'] = new sfValidatorEmail(array('max_length' => 50, 'required' => true), array('required'=> "Ingrese correo electrónico"));
    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorDoctrineUnique(array('model' => 'Correos', 'column' => array('correo', 'id_identificacion')), array('invalid'=> "Correo Electrónico ya fue asignado al Facilitador")),
    )));
  }
}
