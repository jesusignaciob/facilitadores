<?php

/**
 * AreasFormacionFacilitador form base class.
 *
 * @method AreasFormacionFacilitador getObject() Returns the current form's model object
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAreasFormacionFacilitadorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_identificacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'add_empty' => false)),
      'id_area_formacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreasFormacion'), 'add_empty' => false)),
      'estatus'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_identificacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'))),
      'id_area_formacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreasFormacion'))),
      'estatus'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('areas_formacion_facilitador[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AreasFormacionFacilitador';
  }

}
