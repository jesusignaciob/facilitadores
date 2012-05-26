<?php

/**
 * DisponibilidadTrasladoEstado form base class.
 *
 * @method DisponibilidadTrasladoEstado getObject() Returns the current form's model object
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDisponibilidadTrasladoEstadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_identificacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'add_empty' => true)),
      'id_estado'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'id_municipio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'id_parroquia'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)), 
      'requiere_traslado' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_identificacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'required' => false)),
      'id_estado'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'required' => true)),
      'id_municipio'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'required' => true)),
      'id_parroquia'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'required' => true)),
      'requiere_traslado' => new sfValidatorBoolean(array('required' => true)),
    ));

    $this->widgetSchema->setNameFormat('disponibilidad_traslado_estado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DisponibilidadTrasladoEstado';
  }

}
