<?php

/**
 * Identificacion filter form base class.
 *
 * @package    facilitadores
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIdentificacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'           => new sfWidgetFormFilterInput(),
      'cedula_pasaporte'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nacionalidad'       => new sfWidgetFormFilterInput(),
      'direccion'          => new sfWidgetFormFilterInput(),
      'sector'             => new sfWidgetFormFilterInput(),
      'situacion_laboral'  => new sfWidgetFormFilterInput(),
      'formacion_politica' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'id_estado'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'id_municipio'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'id_parroquia'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'apellido'           => new sfValidatorPass(array('required' => false)),
      'cedula_pasaporte'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nacionalidad'       => new sfValidatorPass(array('required' => false)),
      'direccion'          => new sfValidatorPass(array('required' => false)),
      'sector'             => new sfValidatorPass(array('required' => false)),
      'situacion_laboral'  => new sfValidatorPass(array('required' => false)),
      'formacion_politica' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'id_estado'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'id_municipio'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'id_parroquia'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parroquia'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('identificacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Identificacion';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nombre'             => 'Text',
      'apellido'           => 'Text',
      'cedula_pasaporte'   => 'Number',
      'nacionalidad'       => 'Text',
      'direccion'          => 'Text',
      'sector'             => 'Text',
      'situacion_laboral'  => 'Text',
      'formacion_politica' => 'Boolean',
      'id_estado'          => 'ForeignKey',
      'id_municipio'       => 'ForeignKey',
      'id_parroquia'       => 'ForeignKey',
    );
  }
}
