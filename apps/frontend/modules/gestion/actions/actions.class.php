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

  public function executeCargarMunicipios(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar');

    if('*' != $query){
      $querystring = Doctrine_Core::getTable('Municipio')->createQuery()->where('id_estado=?',$query);
      $this->municipios = $querystring->execute();
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
      $querystring = Doctrine_Core::getTable('Parroquia')->createQuery()->where('id_municipio=?',$query);
      $this->parroquias = $querystring->execute();
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
