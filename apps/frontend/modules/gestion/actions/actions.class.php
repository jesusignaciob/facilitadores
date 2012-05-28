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
    $id = $request->getParameter('id');
   //Realizar la consulta a la tabla telefonos referenciando el id y la enviamos al formulario insertartelefonoSuccess.php
   $this->telefonos = Doctrine_Core::getTable('Telefonos')->obtenerTelefonosPorFacilitador($id);
  }
  public function executeInsertarcorreo(sfWebRequest $request)
  {
	$this->form = new CorreosForm();
        $id = $request->getParameter('id');
   //Realizar la consulta a la tabla correos referenciando el id y la enviamos al formulario insertarcorreoSuccess.php
   $this->correos = Doctrine_Core::getTable('Correos')->obtenerCorreosPorFacilitador($id);
  }
  public function executeInsertar_areas_formacion_facilitador(sfWebRequest $request)
  {
	$this->form = new AreasFormacionFacilitadorForm();
        //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla areas_formacion y areas_formacion_facilitador referenciando el id y la enviamos al formulario insertar_areas_formacion_facilitadorSuccess.php
   $this->areas_formacion_facilitador = Doctrine_Core::getTable('AreasFormacionFacilitador')->obtenerAreasFormacionPorFacilitador($id);
  }
  public function executeInsertar_nivel_formacion_facilitador(sfWebRequest $request)
  {
	$this->form = new NivelFormacionForm();
        //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla nivel_formacion referenciando el id y la enviamos al formulario insertar_nivel_formacion_facilitadorSuccess.php
   $this->nivel_formacion_facilitador = Doctrine_Core::getTable('NivelFormacion')->obtenerNivelFormacionPorFacilitador($id);
  }
public function executeInsertar_profesion(sfWebRequest $request)
  {
	$this->form = new ProfesionForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla profesion referenciando el id y la enviamos al formulario insertar_profesionSuccess.php
   $this->profesion_facilitador = Doctrine_Core::getTable('Profesion')->obtenerProfesionPorFacilitador($id);
  }
public function executeInsertar_ocupacion(sfWebRequest $request)
  {
	$this->form = new OcupacionForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   $this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
  }
public function executeInsertar_dias_turno(sfWebRequest $request)
  {
    
   $this->form = new DisponibilidadTurnosForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   //$this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
  }
public function executeInsertar_traslados(sfWebRequest $request)
  {
    
   $this->form = new DisponibilidadTrasladoEstadoForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   //$this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
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
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla telefonos referenciando el id y la enviamos al formulario insertartelefonoSuccess.php
   $this->telefonos = Doctrine_Core::getTable('Telefonos')->obtenerTelefonosPorFacilitador($id);  
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
   }
   }
//Funcion para validar las entradas de datos de Correos
public function executeCreateCorreo(sfWebRequest $request)
 {
   $this->form = new CorreosForm();
   $this->processFormCorreos($request, $this->form);
   $this->setTemplate('insertarcorreo');
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla correos referenciando el id y la enviamos al formulario insertarcorreoSuccess.php
   $this->correos = Doctrine_Core::getTable('Correos')->obtenerCorreosPorFacilitador($id);
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
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla areas_formacion_facilitador referenciando el id y la enviamos al formulario insertar_areas_formacion_facilitadorSuccess.php
   $this->areas_formacion_facilitador = Doctrine_Core::getTable('AreasFormacionFacilitador')->obtenerAreasFormacionPorFacilitador($id);
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
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla nivel_formacion referenciando el id y la enviamos al formulario insertar_nivel_formacion_facilitadorSuccess.php
   $this->nivel_formacion_facilitador = Doctrine_Core::getTable('NivelFormacion')->obtenerNivelFormacionPorFacilitador($id);
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
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla profesion referenciando el id y la enviamos al formulario insertar_profesionSuccess.php
   $this->profesion_facilitador = Doctrine_Core::getTable('Profesion')->obtenerProfesionPorFacilitador($id);
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

//Funcion para validar las entradas de datos de Ocupacion
public function executeCreateOcupacion(sfWebRequest $request)
 {
   $this->form = new OcupacionForm();
   $this->processOcupacion($request, $this->form);
   $this->setTemplate('insertar_ocupacion');
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   $this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
 }
//Si pasa la funcion anterior, almacena los registros de Ocupacion
  protected function processOcupacion(sfWebRequest $request, sfForm $form)
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

//Funcion para validar las entradas de datos de Turnos disponibles
public function executeCreateTurnoDisponible(sfWebRequest $request)
 {
   $this->form = new DisponibilidadTurnosForm();
   $this->processDisponibilidadTurnos($request, $this->form);
   $this->setTemplate('insertar_dias_turno');
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   //$this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
 }
//Si pasa la funcion anterior, almacena los registros de Ocupacion
  protected function processDisponibilidadTurnos(sfWebRequest $request, sfForm $form)
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

//Funcion para validar las entradas de datos de Disponbilidad traslados
public function executeCreateDisponibilidadtraslados(sfWebRequest $request)
 {
   $this->form = new DisponibilidadTrasladoEstadoForm();
   $this->processDisponibilidadTrasladoEstado($request, $this->form);
   $this->setTemplate('insertar_traslados');
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   //$this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
 }
//Si pasa la funcion anterior, almacena los registros de Disponbilidad traslados
  protected function processDisponibilidadTrasladoEstado(sfWebRequest $request, sfForm $form)
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
   
   $this->areas = Doctrine::getTable('AreasFormacion')->obtenerTodos();
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
    if (!$request->isXmlHttpRequest())
      return $this->renderText('No hay registros');
  
    $cedula = $request->getParameter('cedula');
    $nombre = $request->getParameter('nombre');
    $apellido = $request->getParameter('apellido');
    $estado = $request->getParameter('estado');
    $municipio = $request->getParameter('municipio');
    $parroquia = $request->getParameter('parroquia');
    $estatus = $request->getParameter('estatus');
    $id = $request->getParameter('id');
    $area = $request->getParameter('area');

    if (strlen($id) > 0)
      Doctrine_Core::getTable('Identificacion')->eliminarFacilitador($id);

    $this->facilitadores = Doctrine_Core::getTable('Identificacion')->obtenerFacilitadores($cedula, $nombre, $apellido, $estado, $municipio, $parroquia, $estatus, $area);

    return $this->renderPartial('gestion/facilitadoresList', array('facilitadores' => $this->facilitadores, 'cedula' => $cedula, 'nombre' => $nombre, 'apellido' => $apellido, 'estado' => $estado, 'municipio' => $municipio, 'parroquia' => $parroquia, 'estatus' => $estatus, 'area' => $area));
  }

  public function executeCargarMunicipios(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar');
  //$this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar_traslados');
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
//$this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar_traslados');
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

public function executeCargarMunicipiosTraslados(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar_traslados');
    if('*' != $query){
      $this->municipios = Doctrine_Core::getTable('Municipio')->obtenerMunicipiosPorEstado($query);
    }
 
    if ($request->isXmlHttpRequest())
    {
      if ('*' == $query || !$this->municipios)
      {
        return $this->renderText('');
      }
      return $this->renderPartial('gestion/municipiosListTraslados', array('municipios' => $this->municipios));
    }
  }
  public function executeCargarParroquiasTraslados(sfWebRequest $request)
  {
   $this->forwardUnless($query = $request->getParameter('query'), 'gestion', 'insertar_traslados');
    if('*' != $query){
      $this->parroquias = Doctrine_Core::getTable('Parroquia')->obtenerParroquiaPorMunicipio($query);
    }
 
    if ($request->isXmlHttpRequest())
    {
      if ('*' == $query || !$this->parroquias)
      {
        return $this->renderText('');
      }
      return $this->renderPartial('gestion/parroquiasListTraslados', array('parroquias' => $this->parroquias));
    }
  }

}
