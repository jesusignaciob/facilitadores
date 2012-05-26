<?php

/**
 * Identificacion form base class.
 *
 * @method Identificacion getObject() Returns the current form's model object
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIdentificacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nombre'             => new sfWidgetFormInputText(),
      'apellido'           => new sfWidgetFormInputText(),
      'cedula_pasaporte'   => new sfWidgetFormInputText(),
      'nacionalidad'       => new sfWidgetFormInputText(),
      'direccion'          => new sfWidgetFormInputText(),
      'sector'             => new sfWidgetFormInputText(),
      'situacion_laboral'  => new sfWidgetFormInputText(),
      'formacion_politica' => new sfWidgetFormInputCheckbox(),
      'id_estado'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'id_municipio'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'id_parroquia'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'            => new sfValidatorString(array('required' => true), array('required'=> "Ingrese el nombre")),
      'apellido'            => new sfValidatorString(array('required' => true), array('required'=> "Ingrese el apellido")),
      'cedula_pasaporte'            => new sfValidatorInteger(array('required' => true), array('required'=> "Ingrese cédula ó pasaporte")),
      'nacionalidad'            => new sfValidatorString(array('required' => true), array('required'=> "Ingrese la nacionalidad")),
      'direccion'            => new sfValidatorString(array('required' => true), array('required'=> "Ingrese la dirección")),
     'sector'            => new sfValidatorString(array('required' => true), array('required'=> "Ingrese el sector")),
      'situacion_laboral'            => new sfValidatorString(array('required' => true), array('required'=> "Ingrese situación laboral")),
      'formacion_politica'            => new sfValidatorBoolean(array('required' => true), array('required'=> "Seleccione formación política")),
      'id_estado'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'required' => true)),
      'id_municipio'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'required' => true)),
      'id_parroquia'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'required' => true)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Identificacion', 'column' => array('cedula_pasaporte')))
    );

    $this->widgetSchema->setNameFormat('identificacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'Identificacion', 'column' => array('cedula_pasaporte')), array('invalid'=> "Esta cédula ó pasaporte ya pertenece a un Facilitador")),
))));
    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Identificacion';
  }

}
