<?php

/**
 * Identificacion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IdentificacionForm extends BaseIdentificacionForm
{
  public function configure()
  {
        $this->widgetSchema['id_estado'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true));
        
        $this->widgetSchema->setLabels(array(
          'id_estado'    => 'Estado',
          'id_municipio'   => 'Municipio',
          'id_parroquia' => 'Parroquia',
        ));
        
        $this->validatorSchema['nombre'] = new sfValidatorString(array('max_length' => 50,'required' => true), array('required'=> "Ingrese el nombre"));
        $this->validatorSchema['apellido'] = new sfValidatorString(array('max_length' => 50,'required' => true), array('required'=> "Ingrese el apellido"));
        $this->validatorSchema['cedula_pasaporte'] = new sfValidatorString(array('max_length' => 8,'required' => true), array('required'=> "Ingrese la cédula ó pasaporte"));
        $this->validatorSchema['nacionalidad'] = new sfValidatorString(array('max_length' => 20,'required' => true), array('required'=> "Ingrese la nacionalidad"));
        $this->validatorSchema['direccion'] = new sfValidatorString(array('max_length' => 100,'required' => true), array('required'=> "Ingrese la dirección"));
        $this->validatorSchema['sector'] = new sfValidatorString(array('max_length' => 100,'required' => true), array('required'=> "Ingrese el sector"));
        $this->validatorSchema['situacion_laboral'] = new sfValidatorString(array('max_length' => 50,'required' => true), array('required'=> "Ingrese situación laboral"));
        $this->validatorSchema['id_estado'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'required' => true), array('required'=> "Seleccione el estado"));
        $this->validatorSchema['id_municipio'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'required' => true), array('required'=> "Seleccione el municipio"));
        $this->validatorSchema['id_parroquia'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'required' => true), array('required'=> "Seleccione la parroquia"));
        
        $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'Identificacion', 'column' => array('cedula_pasaporte')), array('invalid'=> "Esta cédula ó pasaporte ya fue asignada al Facilitador")),
)));
  }
}
