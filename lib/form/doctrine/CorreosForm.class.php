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
	$this->widgetSchema['correo'] = new sfWidgetFormInputText();

	/*$this->setValidators(array(
	'correo'        => new sfValidatorEmail(array('required'=>true), array('required'=> "El correo es obligatorio")),            
	));

$this->widgetSchema->setNameFormat('correos[%s]');
	$this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'Correos', 'column' => array('correo')), array('invalid'=> "El correo ya existe")),
            )));*/
  }
}
