<?php

/**
 * IdentificacionBuscar form.
 *
 * @package    facilitadores
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IdentificacionBuscarForm extends BaseIdentificacionBuscarForm
{
  public function configure()
  {
          $this->widgetSchema->setLabels(array(
          'id_estado'    => 'Estado',
          'id_municipio'   => 'Municipio',
          'id_parroquia' => 'Parroquia',
          'estatus' => 'Estatus',
        ));

  }
}
