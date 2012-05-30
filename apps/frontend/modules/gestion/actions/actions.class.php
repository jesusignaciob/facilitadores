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
   //Obtiene el id del telefono
   $id_telefono = $request->getParameter('id_telefono');
   //Si la variable id del telefono existe, realiza la eliminacion y redirecciona
   //de nuevo a insertartelefono
   if (isset($id_telefono))
   {
   Doctrine_Core::getTable('Telefonos')->eliminarTelefono($id_telefono);
   $this->redirect('gestion/insertartelefono?id='.$id);
   }
  }
  public function executeInsertarcorreo(sfWebRequest $request)
  {
	$this->form = new CorreosForm();
    $id = $request->getParameter('id');
   //Realizar la consulta a la tabla correos referenciando el id y la enviamos al formulario insertarcorreoSuccess.php
   $this->correos = Doctrine_Core::getTable('Correos')->obtenerCorreosPorFacilitador($id);
   //Obtiene el id del correo
   $id_correo = $request->getParameter('id_correo');
   //Si la variable id del correo existe, realiza la eliminacion y redirecciona
   //de nuevo a insertarcorreo
   if (isset($id_correo))
   {
   Doctrine_Core::getTable('Correos')->eliminarCorreo($id_correo);
   $this->redirect('gestion/insertarcorreo?id='.$id);
   }
  }
  public function executeInsertar_areas_formacion_facilitador(sfWebRequest $request)
  {
	$this->form = new AreasFormacionFacilitadorForm();
        //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla areas_formacion y areas_formacion_facilitador referenciando el id y la enviamos al formulario insertar_areas_formacion_facilitadorSuccess.php
   $this->areas_formacion_facilitador = Doctrine_Core::getTable('AreasFormacionFacilitador')->obtenerAreasFormacionPorFacilitador($id);
   //Obtiene el id del Area Formacion Facilitador
   $id_area = $request->getParameter('id_area');
   //Si la variable id del area existe, realiza la eliminacion y redirecciona
   //de nuevo a insertar_areas_formacion_facilitador
   if (isset($id_area))
   {
   Doctrine_Core::getTable('AreasFormacionFacilitador')->eliminarAreasFormacion($id_area);
   $this->redirect('gestion/insertar_areas_formacion_facilitador?id='.$id);
   }
  }
  public function executeInsertar_nivel_formacion_facilitador(sfWebRequest $request)
  {
   $this->form = new NivelFormacionForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla nivel_formacion referenciando el id y la enviamos al formulario insertar_nivel_formacion_facilitadorSuccess.php
   $this->nivel_formacion_facilitador = Doctrine_Core::getTable('NivelFormacion')->obtenerNivelFormacionPorFacilitador($id);
   //Obtiene el id del Nivel Formacion Facilitador
   $id_nivel = $request->getParameter('id_formacion');
   //Si la variable id_nivel existe, realiza la eliminacion y redirecciona
   //de nuevo a insertar_nivel_formacion_facilitador
   if (isset($id_nivel))
   {
   Doctrine_Core::getTable('NivelFormacion')->eliminarNivelFormacion($id_nivel);	
   $this->redirect('gestion/insertar_nivel_formacion_facilitador?id='.$id);
   }
  }
public function executeInsertar_profesion(sfWebRequest $request)
  {
	$this->form = new ProfesionForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla profesion referenciando el id y la enviamos al formulario insertar_profesionSuccess.php
   $this->profesion_facilitador = Doctrine_Core::getTable('Profesion')->obtenerProfesionPorFacilitador($id);
   //Obtiene el id del Nivel Formacion Facilitador
   $id_profesion = $request->getParameter('id_profesion');
   //Si la variable id_profesion existe, realiza la eliminacion y redirecciona
   //de nuevo a insertar_profesion
   if (isset($id_profesion))
   {
   Doctrine_Core::getTable('Profesion')->eliminarProfesion($id_profesion);
   $this->redirect('gestion/insertar_profesion?id='.$id);
   }
  }
public function executeInsertar_ocupacion(sfWebRequest $request)
  {
	$this->form = new OcupacionForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   $this->ocupacion_facilitador = Doctrine_Core::getTable('Ocupacion')->obtenerOcupacionPorFacilitador($id);
   //Obtiene el id de la Ocupacion
   $id_ocupacion = $request->getParameter('id_ocupacion');
   //Si la variable id_ocupacion existe, realiza la eliminacion y redirecciona
   //de nuevo a insertar_ocupacion
   if (isset($id_ocupacion))
   {
   Doctrine_Core::getTable('Ocupacion')->eliminarOcupacion($id_ocupacion);
   $this->redirect('gestion/insertar_ocupacion?id='.$id);
   }
  }
public function executeInsertar_dias_turno(sfWebRequest $request)
  {
    
   $this->form_turnos = new DisponibilidadTurnosForm();
   $this->form_dias = new DisponibilidadDiasForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_dias_turnoSuccess.php
   $this->obtener_dias_turno = Doctrine_Core::getTable('DisponibilidadDias')->obtenerDiasTurnoFacilitador($id);
  }
public function executeInsertar_traslados(sfWebRequest $request)
  {
    
   $this->form = new DisponibilidadTrasladoEstadoForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla DisponibilidadTrasladoEstado referenciando el id y la enviamos al formulario insertar_trasladosSuccess.php
   $this->traslados_facilitador = Doctrine_Core::getTable('DisponibilidadTrasladoEstado')->obtenerDisponibilidadTraslado($id);
   //Obtiene el id del Traslado
   $id_traslado = $request->getParameter('id_traslado');
   //Si la variable id_traslado existe, realiza la eliminacion y redirecciona
   //de nuevo a insertar_traslado
   if (isset($id_traslado))
   {
   Doctrine_Core::getTable('DisponibilidadTrasladoEstado')->eliminarTraslados($id_traslado);	
   $this->redirect('gestion/insertar_traslados?id='.$id);
   }
  }
public function executeInsertar_secciones(sfWebRequest $request)
  {
    
   $this->form = new SeccionesForm();
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla AreasFormacionFacilitador referenciando el id y la enviamos al formulario insertar_seccionesSuccess.php
   $this->areas_formacion_facilitador = Doctrine_Core::getTable('AreasFormacionFacilitador')->obtenerAreasFormacionPorFacilitador($id);
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
     $id = $form->getObject()->id; 
     $bitacora= new BitacoraFormacionFacilitador();
     $bitacora->setIdAreaFormacionFacilitador($id);
     $bitacora->setFecha(date('Y-m-d'));
     $bitacora->save();
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
   $id = $request->getParameter('id');
   //Realiza el Borrado de la tabla DisponibilidadDias asignado al id del Facilitador
   Doctrine_Core::getTable('DisponibilidadDias')->eliminarDias($id);	
     
   $dias[] = $request->getParameter('lunes');
   $dias[] = $request->getParameter('martes');
   $dias[] = $request->getParameter('miercoles');
   $dias[] = $request->getParameter('jueves');
   $dias[] = $request->getParameter('viernes');
   $dias[] = $request->getParameter('sabado');
   $dias[] = $request->getParameter('domingo');
   $this->x = $dias;

   foreach($dias as $key=>$dia) {
       if(!empty($dia)) {
         $d = new DisponibilidadDias();
         $d->setIdIdentificacion($request->getParameter('id'));
         $d->setDia($key);
         $d->save();
       }
     foreach($dia as $t) {
       $turnos = new DisponibilidadTurnos();
       $turnos->setIdDisponibilidadDia($d->getId());
       $turnos->setTurno($t);
       $turnos->save();
     }
   }

   $this->redirect('gestion/insertar_dias_turno?id='.$request->getParameter('id'));
   
   //Realizar la consulta a la tabla ocupacion referenciando el id y la enviamos al formulario insertar_ocupacionSuccess.php
   $this->consultar_horas_turno = Doctrine_Core::getTable('DisponibilidadDias')->obtenerDiasPorFacilitador($id);
}

//Funcion para validar las entradas de datos de Disponbilidad traslados
public function executeCreateDisponibilidadtraslados(sfWebRequest $request)
 {
   $this->form = new DisponibilidadTrasladoEstadoForm();
   $this->processDisponibilidadTrasladoEstado($request, $this->form);
   $this->setTemplate('insertar_traslados');
   //obtener el id que pertenece al identificador
   $id = $request->getParameter('id');
   //Realizar la consulta a la tabla DisponibilidadTrasladoEstado referenciando el id y la enviamos al formulario insertar_trasladosSuccess.php
   $this->traslados_facilitador = Doctrine_Core::getTable('DisponibilidadTrasladoEstado')->obtenerDisponibilidadTraslado($id);
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
   
   $this->areas = Doctrine::getTable('AreasFormacion')->getAreasFormacion();
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
      $this->redirect('gestion/asignarSecciones?id='.$request->getParameter('id'));
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
    $this->redirect('gestion/asignarSecciones?id='.$request->getParameter('id'));
    
  }
  /****************************************************************************/



}
