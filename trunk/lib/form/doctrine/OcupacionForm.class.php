<?php

/**
 * Ocupacion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OcupacionForm extends BaseOcupacionForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
	
	  $this->validatorSchema['nombre_ocupacion'] = new sfValidatorString(array('max_length' => 50, 'required' => true), array('required'=> "Ingrese nombre de ocupación"));
	
	  $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'Ocupacion', 'column' => array('nombre_ocupacion','id_identificacion')), array('invalid'=> "Ocupación ya fue asignada al Facilitador")),
)));
  }
}
