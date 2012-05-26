<?php

/**
 * Ocupacion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OcupacionForm extends BaseOcupacionForm
{
  public function configure()
  {
	$this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
  }
}
