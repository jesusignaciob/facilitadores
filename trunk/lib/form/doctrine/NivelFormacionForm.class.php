<?php

/**
 * NivelFormacion form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NivelFormacionForm extends BaseNivelFormacionForm
{
  public function configure()
  {
	$this->widgetSchema['id_identificacion'] = new sfWidgetFormInputHidden();
  }
}
