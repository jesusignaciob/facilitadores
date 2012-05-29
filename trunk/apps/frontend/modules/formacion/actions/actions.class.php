<?php

/**
 * formacion actions.
 *
 * @package    facilitadores
 * @subpackage formacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formacionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }

    /******************************* ESTUDIOS**********************************/
  public function executeEstudios(sfWebRequest $request)
  {
    $this->estudios = Doctrine_Core::getTable('Estudios')->getEstudios();
    $this->filter = new EstudiosFormFilter();
  }
  public function executeEstudiosFiltro(sfWebRequest $request) {
    $this->filter = new EstudiosFormFilter();
    $this->query = $this->filter->buildQuery($request->getParameter('estudios_filters'));
    $this->estudios = $this->query->execute();
    $this->setTemplate('estudios');
  }
  public function executeEstudiosInsertar(sfWebRequest $request)
  {
    $this->form = new EstudiosForm();
  }

  public function executeEstudiosEditar(sfWebRequest $request)
  {
    $this->forward404Unless($estudios = Doctrine_Core::getTable('Estudios')->find($request->getParameter('id')),
    sprintf('Object estudios does not exist (%s).', $request->getParameter('id')));
    $this->form = new EstudiosForm($estudios);
  }

  public function executeEstudiosCrear(sfWebRequest $request)
  {
    $this->form = new EstudiosForm();
    $this->processForm($request, $this->form);
    $this->setTemplate('estudiosInsertar');
  }

  public function executeEstudiosModificar(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($estudios = Doctrine_Core::getTable('Estudios')->find($request->getParameter('id')),
            sprintf('Object estudios does not exist (%s).',
            $request->getParameter('id')));
    $this->form = new EstudiosForm($estudios);
    $this->processForm($request, $this->form);
    $this->setTemplate('estudiosEditar');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
    );

    $id = $form->getObject()->get('id');

    if ($form->isValid())
    {
      $result = $form->save();
      if($form->isNew()){
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_insertado'));
        $this->redirect('formacion/estudiosInsertar?id='.$id);
      }
      else{
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_modificado'));
        $this->redirect('formacion/estudiosEditar?id='.$id);
      }

    }
  }

  public function executeEstudiosEliminar(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $this->forward404Unless($estudios = Doctrine_Core::getTable('Estudios')->find($request->getParameter('id')),
    sprintf('Object estudios does not exist (%s).',
    $request->getParameter('id')));
    $estudios->delete();
    $this->getUser()->setFlash('mensaje', sfConfig::get('app_mensaje_eliminado'));
    $this->redirect('formacion/estudios');
  }

  /***************************** END ESTUDIOS *********************************/




    /******************************* AREAS FORMACION **************************/
  public function executeAreasFormacion(sfWebRequest $request)
  {
    $this->areasFormacion = Doctrine_Core::getTable('AreasFormacion')->getAreasFormacion();
    $this->filter = new AreasFormacionFormFilter();
  }
  public function executeAreasFiltro(sfWebRequest $request) {
    $this->filter = new AreasFormacionFormFilter();
    $this->query = $this->filter->buildQuery($request->getParameter('areas_formacion_filters'));
    $this->areasFormacion = $this->query->execute();
    $this->setTemplate('areasFormacion');
  }
  public function executeAreasFormacionInsertar(sfWebRequest $request)
  {
    $this->form = new AreasFormacionForm();
  }

  public function executeAreasFormacionEditar(sfWebRequest $request)
  {
    $this->forward404Unless($areasFormacion = Doctrine_Core::getTable('AreasFormacion')->find($request->getParameter('id')),
    sprintf('Object areasFormacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new AreasFormacionForm($areasFormacion);
  }

  public function executeAreasFormacionCrear(sfWebRequest $request)
  {
    $this->form = new AreasFormacionForm();
    $this->processAreasFormacionForm($request, $this->form);
    $this->setTemplate('areasFormacionInsertar');
  }

  public function executeAreasFormacionModificar(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($areasFormacion = Doctrine_Core::getTable('AreasFormacion')->find($request->getParameter('id')),
            sprintf('Object areasFormacion does not exist (%s).',
            $request->getParameter('id')));
    $this->form = new AreasFormacionForm($areasFormacion);
    $this->processAreasFormacionForm($request, $this->form);
    $this->setTemplate('areasFormacionEditar');
  }

  protected function processAreasFormacionForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
    );

    $id = $form->getObject()->get('id');

    if ($form->isValid())
    {
      $result = $form->save();
      if($form->isNew()){
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_insertado'));
        $this->redirect('formacion/areasFormacionInsertar?id='.$id);
      }
      else{
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_modificado'));
        $this->redirect('formacion/areasFormacionEditar?id='.$id);
      }

    }
  }

  public function executeAreasFormacionEliminar(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $this->forward404Unless($areasFormacion = Doctrine_Core::getTable('AreasFormacion')->find($request->getParameter('id')),
    sprintf('Object areasFormacion does not exist (%s).',
    $request->getParameter('id')));
    $areasFormacion->delete();
    $this->getUser()->setFlash('mensaje', sfConfig::get('app_mensaje_eliminado'));
    $this->redirect('formacion/areasFormacion');
  }

  /***************************** END AREAS FORMACION *********************************/



    /******************************* ENTES **************************/
  public function executeEntes(sfWebRequest $request)
  {
    $this->entes = Doctrine_Core::getTable('Ente')->getEntes();
    $this->filter = new EnteFormFilter();
  }
  public function executeEntesFiltro(sfWebRequest $request) {
    $this->filter = new EnteFormFilter();
    $this->query = $this->filter->buildQuery($request->getParameter('ente_filters'));
    $this->entes = $this->query->execute();
    $this->setTemplate('entes');
  }
  public function executeEntesInsertar(sfWebRequest $request)
  {
    $this->form = new EnteForm();
  }

  public function executeEntesEditar(sfWebRequest $request)
  {
    $this->forward404Unless($entes = Doctrine_Core::getTable('Ente')->find($request->getParameter('id')),
    sprintf('Object entes does not exist (%s).', $request->getParameter('id')));
    $this->form = new EnteForm($entes);
  }

  public function executeEntesCrear(sfWebRequest $request)
  {
    $this->form = new EnteForm();
    $this->processEntesForm($request, $this->form);
    $this->setTemplate('entesInsertar');
  }

  public function executeEntesModificar(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($entes = Doctrine_Core::getTable('Ente')->find($request->getParameter('id')),
            sprintf('Object entes does not exist (%s).',
            $request->getParameter('id')));
    $this->form = new EnteForm($entes);
    $this->processEntesForm($request, $this->form);
    $this->setTemplate('entesEditar');
  }

  protected function processEntesForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
    );

    $id = $form->getObject()->get('id');

    if ($form->isValid())
    {
      $result = $form->save();
      if($form->isNew()){
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_insertado'));
        $this->redirect('formacion/entesInsertar?id='.$id);
      }
      else{
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_modificado'));
        $this->redirect('formacion/entesEditar?id='.$id);
      }

    }
  }

  public function executeEntesEliminar(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $this->forward404Unless($entes = Doctrine_Core::getTable('Ente')->find($request->getParameter('id')),
    sprintf('Object entes does not exist (%s).',
    $request->getParameter('id')));
    $entes->delete();
    $this->getUser()->setFlash('mensaje', sfConfig::get('app_mensaje_eliminado'));
    $this->redirect('formacion/entes');
  }

  /***************************** END AREAS ENTES *********************************/



    /******************************* SECCIONES**********************************/
  public function executeSecciones(sfWebRequest $request)
  {
    $this->secciones = Doctrine_Core::getTable('Secciones')->getSecciones();
    $this->filter = new SeccionesFormFilter();
  }
  public function executeSeccionesFiltro(sfWebRequest $request) {
    $this->filter = new SeccionesFormFilter();
    $this->query = $this->filter->buildQuery($request->getParameter('secciones_filters'));
    $this->secciones = $this->query->execute();
    $this->setTemplate('secciones');
  }
  public function executeSeccionesInsertar(sfWebRequest $request)
  {
    $this->form = new SeccionesForm();
  }

  public function executeSeccionesEditar(sfWebRequest $request)
  {
    $this->forward404Unless($secciones = Doctrine_Core::getTable('Secciones')->find($request->getParameter('id')),
    sprintf('Object secciones does not exist (%s).', $request->getParameter('id')));
    $this->form = new SeccionesForm($secciones);
  }

  public function executeSeccionesCrear(sfWebRequest $request)
  {
    $this->form = new SeccionesForm();
    $this->processFormSecciones($request, $this->form);
    $this->setTemplate('seccionesInsertar');
  }

  public function executeSeccionesModificar(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($secciones = Doctrine_Core::getTable('Secciones')->find($request->getParameter('id')),
            sprintf('Object secciones does not exist (%s).',
            $request->getParameter('id')));
    $this->form = new SeccionesForm($secciones);
    $this->processFormSecciones($request, $this->form);
    $this->setTemplate('seccionesEditar');
  }

  protected function processFormSecciones(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
    );

    $id = $form->getObject()->get('id');

    if ($form->isValid())
    {
      $result = $form->save();
      if($form->isNew()){
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_insertado'));
        $this->redirect('formacion/seccionesInsertar?id='.$id);
      }
      else{
        $this->getUser()->setFlash('mensaje',sfConfig::get('app_mensaje_modificado'));
        $this->redirect('formacion/seccionesEditar?id='.$id);
      }

    }
  }

  public function executeSeccionesEliminar(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $this->forward404Unless($secciones = Doctrine_Core::getTable('Secciones')->find($request->getParameter('id')),
    sprintf('Object secciones does not exist (%s).',
    $request->getParameter('id')));
    $secciones->delete();
    $this->getUser()->setFlash('mensaje', sfConfig::get('app_mensaje_eliminado'));
    $this->redirect('formacion/secciones');
  }

  /***************************** END SECCIONES *********************************/

  
  /**************************** ASIGNAR SECCIONES ******************************/
  
  public function executeAsignarSecciones(sfWebRequest $request)
  {
    $this->secciones = Doctrine_Core::getTable('Secciones')->getSeccionesForFacilitador($request->getParameter('id'));
    
    $this->asignados = Doctrine_Core::getTable('Secciones')->findBy('id_identificacion', $request->getParameter('id'));
  }
  public function executeAsignarSeccionesUpdate(sfWebRequest $request)
  {
    if($request->getParameter('seccion')=='' or $request->getParameter('id')=='') {
      $this->getUser()->setFlash('error', 'Todos los campos son requeridos');
      $this->redirect('formacion/asignarSecciones?id='.$request->getParameter('id'));
    }
    
    $seccion = Doctrine_Core::getTable('Secciones')->find($request->getParameter('seccion'));
    $seccion->setIdIdentificacion($request->getParameter('id'));
    $seccion->save();
    
    $bitacora = new BitacoraSecciones();
    $bitacora->setIdSecciones($seccion->getId());
    $bitacora->setIdIdentificacion($request->getParameter('id'));
    $bitacora->setFecha(date("Y-m-d"));
    $bitacora->save();    
    $this->getUser()->setFlash('mensaje', '¡Registro asignado con exito!');
    $this->redirect('formacion/asignarSecciones?id='.$request->getParameter('id'));
    
  }
  /****************************************************************************/



  public function executeCargarMunicipios(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'formacion', 'insertar');

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
      return $this->renderPartial('formacion/municipiosList', array('municipios' => $this->municipios));
    }
  }
  public function executeCargarParroquias(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'formacion', 'insertar');

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
      return $this->renderPartial('formacion/parroquiasList', array('parroquias' => $this->parroquias));
    }
  }

}
