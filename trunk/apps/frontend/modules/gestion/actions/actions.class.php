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
  public function executeInsertartelefono(sfWebRequest $request)
  {
    $this->form = new TelefonosForm();
  }
  public function executeInsertarcorreo(sfWebRequest $request)
  {
	$this->form = new CorreosForm();
  }
  public function executeInsertar_areas_formacion_facilitador(sfWebRequest $request)
  {
	$this->form = new AreasFormacionFacilitadorForm();
  }
  public function executeInsertar_nivel_formacion_facilitador(sfWebRequest $request)
  {
	$this->form = new NivelFormacionForm();
  }
public function executeInsertar_profesion(sfWebRequest $request)
  {
	$this->form = new ProfesionForm();
  }
//Funcion para validar las entradas de datos de Identificacion
  public function executeCreate(sfWebRequest $request)
 {
   $this->form = new IdentificacionForm();
   $this->processForm($request, $this->form);
   $this->setTemplate('insertar');
 }
//Si pasa la funcion anterior, almacena los registros de Identificacion
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
   $form->bind(
     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
     $id = $form->getObject()->id;
     $this->redirect('gestion/insertartelefono?id='.$id);
   }
 }
//Funcion para validar las entradas de datos de Telefonos
 public function executeCreateTelefono(sfWebRequest $request)
 {
   $this->form = new TelefonosForm();
   $this->processFormTelefono($request, $this->form);
   $this->setTemplate('insertartelefono');
   /*$busqueda = $id->getParameter('id');
   $c = new Criteria();
   $c->add(TelefonosPeer::id_identificacion,$id);*/
 }
//Si pasa la funcion anterior, almacena los registros de Telefonos
  protected function processFormTelefono(sfWebRequest $request, sfForm $form)
  {
   $form->bind(


     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
     
     /*$this->forwardUnless($id = $request->getParameter('id'));

     $seleccionartelefonos = Doctrine_Core::getTable('Telefonos')->createQuery()->where('id_identificacion=?',$id);
      $this->telefonos = $seleccionartelefonos->execute();*/
   }
 }
//Funcion para validar las entradas de datos de Correos
public function executeCreateCorreo(sfWebRequest $request)
 {
   $this->form = new CorreosForm();
   $this->processFormCorreos($request, $this->form);
   $this->setTemplate('insertarcorreo');
 }
//Si pasa la funcion anterior, almacena los registros de Correos
  protected function processFormCorreos(sfWebRequest $request, sfForm $form)
  {
   $form->bind(

     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
   }
 }
//Funcion para validar las entradas de datos de Areas de Formación Facilitador
public function executeCreateAreasFormacionFacilitador(sfWebRequest $request)
 {
   $this->form = new AreasFormacionFacilitadorForm();
   $this->processAreasFormacionFacilitador($request, $this->form);
   $this->setTemplate('insertar_areas_formacion_facilitador');
 }
//Si pasa la funcion anterior, almacena los registros de AreasFormacionFacilitador
  protected function processAreasFormacionFacilitador(sfWebRequest $request, sfForm $form)
  {
   $form->bind(

     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
   }
 }
//Funcion para validar las entradas de datos de Nivel de Formación Facilitador
public function executeCreateNivelFormacionFacilitador(sfWebRequest $request)
 {
   $this->form = new NivelFormacionForm();
   $this->processNivelFormacionFacilitador($request, $this->form);
   $this->setTemplate('insertar_nivel_formacion_facilitador');
 }
//Si pasa la funcion anterior, almacena los registros de NivelFormacionFacilitador
  protected function processNivelFormacionFacilitador(sfWebRequest $request, sfForm $form)
  {
   $form->bind(

     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
   }
 }

//Funcion para validar las entradas de datos de Profesion
public function executeCreateProfesion(sfWebRequest $request)
 {
   $this->form = new ProfesionForm();
   $this->processProfesion($request, $this->form);
   $this->setTemplate('insertar_profesion');
 }
//Si pasa la funcion anterior, almacena los registros de Profesion
  protected function processProfesion(sfWebRequest $request, sfForm $form)
  {
   $form->bind(

     $request->getParameter($form->getName()),
     $request->getFiles($form->getName())
   );

   if ($form->isValid())
   {
     $result = $form->save();
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
 
 public function executeDetalle(sfWebRequest $request)
 {
    $id = $request->getParameter('id');
    $this->facilitador = Doctrine::getTable('Identificacion')->find($id);
    
    $this->areasFormPorFacilitador = Doctrine::getTable('AreasFormacionFacilitador')->obtenerAreasFormacionPorFacilitador($id);
    
    $this->telefonos = Doctrine_Core::getTable('Telefonos')->obtenerTelefonosPorFacilitador($id);
    $this->correos = Doctrine_Core::getTable('Correos')->obtenerCorreosPorFacilitador($id);
    
    $this->form = new IdentificacionForm();
    $this->forward404Unless($this->facilitador);
 }

  public function executeCargarFacilitadores(sfWebRequest $request)
  {
    $cedula = $request->getParameter('cedula');
    $nombre = $request->getParameter('nombre');
    $apellido = $request->getParameter('apellido');
    $estado = $request->getParameter('estado');
    $municipio = $request->getParameter('municipio');
    $parroquia = $request->getParameter('parroquia');
    $estatus = $request->getParameter('estatus');

    $this->facilitadores = Doctrine_Core::getTable('Identificacion')->obtenerFacilitadores($cedula, $nombre, $apellido, $estado, $municipio, $parroquia, $estatus);
 
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
