<?php

/**
 * Correos form base class.
 *
 * @method Correos getObject() Returns the current form's model object
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCorreosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_identificacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'add_empty' => true)),
    'correo'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_identificacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'required' => false)),
      'correo'            => new sfValidatorEmail(array('max_length' => 50), array('required'=> "Ingrese correo electrónico")),
    ));

    $this->widgetSchema->setNameFormat('correos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Correos';
  }

}
