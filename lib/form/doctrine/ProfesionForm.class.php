<?php

/**
 * Profesion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProfesionForm extends BaseProfesionForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
	  $this->validatorSchema['nombre_profesion'] = new sfValidatorString(array('max_length' => 50,'required' => true), array('required'=> "Ingrese nombre profesión"));
	
	  $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'Profesion', 'column' => array('nombre_profesion','id_identificacion')), array('invalid'=> "Profesión ya fue asignada al Facilitador")),
)));
  }
}
