<?php

/**
 * Profesion filter form base class.
 *
 * @package    facilitadores
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProfesionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_identificacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Identificacion'), 'add_empty' => true)),
      'nombre_profesion'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_identificacion' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Identificacion'), 'column' => 'id')),
      'nombre_profesion'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profesion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profesion';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_identificacion' => 'ForeignKey',
      'nombre_profesion'  => 'Text',
    );
  }
}
