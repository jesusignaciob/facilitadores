<?php

/**
 * gestion actions.
 *
 * @package    facilitadores
 * @subpackage gestion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class gestionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
  }
  public function executeInsertar(sfWebRequest $request)
  {
    $this->form = new IdentificacionForm();
  }
  
  public function executeCreate(sfWebRequest $request)
 {
   $this->form = new IdentificacionForm();
   $this->processForm($request, $this->form);
   $this->setTemplate('insertar');
 }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
   $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
     $this->redirect('gestion/index');
   }
 }

 public function executeBuscar(sfWebRequest $request)
 {
   $this->form = new IdentificacionBuscarForm();
   $this->buscarProcessForm($request, $this->form);
   $this->setTemplate('buscar');
 }

  protected function buscarProcessForm(sfWebRequest $request, sfForm $form)
  {
   $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
     $this->redirect('gestion/buscar');
   }
 }

  public function executeCargarFacilitadores(sfWebRequest $request)
  {
    $cedula = $request->getParameter('cedula');
    $nombre = $request->getParameter('nombre');
    $apellido = $request->getParameter('apellido');
    $estado = $request->getParameter('estado');
    $municipio = $request->getParameter('municipio');
    $parroquia = $request->getParameter('parroquia');

    $this->facilitadores = Doctrine_Core::getTable('Identificacion')->obtenerFacilitadores($cedula, $nombre, $apellido, $estado, $municipio, $parroquia);
 
    /*if ($request->isXmlHttpRequest())
    {
      if ($this->facilitadores)
        return $this->renderText('No hay registros consultados');
    }*/

    return $this->renderPartial('gestion/facilitadoresList', array('facilitadores' => $this->facilitadores));
  }

  public function executeCargarMunicipios(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar');

    if('*' != $query){
      $this->municipios = Doctrine_Core::getTable('Municipio')->obtenerMunicipiosPorEstado($query);
    }
 
    if ($request->isXmlHttpRequest())
    {
      if ('*' == $query || !$this->municipios)
      {
        return $this->renderText('');
      }
      return $this->renderPartial('gestion/municipiosList', array('municipios' => $this->municipios));
    }
  }
  public function executeCargarParroquias(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar');

    if('*' != $query){
      $this->parroquias = Doctrine_Core::getTable('Parroquia')->obtenerParroquiaPorMunicipio($query);
    }
 
    if ($request->isXmlHttpRequest())
    {
      if ('*' == $query || !$this->parroquias)
      {
        return $this->renderText('');
      }
      return $this->renderPartial('gestion/parroquiasList', array('parroquias' => $this->parroquias));
    }
  }
}
