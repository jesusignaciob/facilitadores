<?php

/**
 * Telefonos form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TelefonosForm extends BaseTelefonosForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
     
    $this->validatorSchema['numero'] = new sfValidatorString(array('max_length' => 12, 'required' => true), array('required'=> "Ingrese el número de teléfono"));
     
    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'Telefonos', 'column' => array('numero', 'id_identificacion')), array('invalid'=> "Teléfono ya fue asignado al Facilitador")),
    )));
  }
}
