<?php

/**
 * AreasFormacionFacilitador form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AreasFormacionFacilitadorForm extends BaseAreasFormacionFacilitadorForm
{
  public function configure()
  {
    $this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
	  $this->widgetSchema['estatus'] = new sfWidgetFormChoice(array('choices' => Doctrine_Core::getTable('AreasFormacionFacilitador')->getstatus()));
     
     $this->validatorSchema['id_area_formacion'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreasFormacion'), 'required' => true), array('required'=> "Seleccione el áreas de formación"));
     $this->validatorSchema['estatus'] = new sfValidatorInteger(array('required' => true), array('required'=> "Seleccione un Estatus"));
     
     $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
     new sfValidatorDoctrineUnique(array('model' => 'AreasFormacionFacilitador', 'column' => array('id_area_formacion', 'id_identificacion')), array('invalid'=> "Área de Formación ya fue asignada al Facilitador")),
    )));   
  }
}
