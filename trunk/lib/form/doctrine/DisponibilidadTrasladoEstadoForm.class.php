<?php

/**
 * DisponibilidadTrasladoEstado form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DisponibilidadTrasladoEstadoForm extends BaseDisponibilidadTrasladoEstadoForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
     $this->widgetSchema->setLabels(array(
          'id_estado'    => 'Estado',
          'id_municipio'   => 'Municipio',
        ));
        
      $this->validatorSchema['id_estado'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'required' => true), array('required'=> "Seleccione el estado"));
      $this->validatorSchema['id_municipio'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'required' => true));
      $this->validatorSchema['requiere_traslado'] = new sfValidatorBoolean(array('required' => true), array('required'=> "Seleccione requiere traslado"));
      
      $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorDoctrineUnique(array('model' => 'DisponibilidadTrasladoEstado', 'column' => array('id_identificacion','id_estado','id_municipio','requiere_traslado')), array('invalid'=> "Ruta de traslado ya fue asignada al Facilitador")),
)));
  }
}
