<?php

/**
 * NivelFormacion form base class.
 *
 * @method NivelFormacion getObject() Returns the current form's model object
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNivelFormacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_identificacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'add_empty' => true)),
      'id_estudios'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estudios'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_identificacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'required' => true)),
      'id_estudios'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estudios'), 'required' => true), array('required'=> "Seleccione el estudio")),
    ));

    $this->widgetSchema->setNameFormat('nivel_formacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'NivelFormacion', 'column' => array('id_estudios','id_identificacion')), array('invalid'=> "Nivel de Formación ya fue asignada al Facilitador")),
))));

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NivelFormacion';
  }

}
