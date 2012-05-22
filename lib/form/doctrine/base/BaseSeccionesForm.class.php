<?php

/**
 * Secciones form base class.
 *
 * @method Secciones getObject() Returns the current form's model object
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSeccionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'id_identificacion'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'add_empty' => true)),
      'id_area_formacion_facilitador' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreasFormacionFacilitador'), 'add_empty' => true)),
      'nombre_seccion'                => new sfWidgetFormInputText(),
      'id_ente'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ente'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_identificacion'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'required' => false)),
      'id_area_formacion_facilitador' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreasFormacionFacilitador'), 'required' => false)),
      'nombre_seccion'                => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_ente'                       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ente'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('secciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Secciones';
  }

}
