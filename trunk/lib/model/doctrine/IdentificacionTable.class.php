<?php

/**
 * IdentificacionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class IdentificacionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object IdentificacionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Identificacion');
    }

    public function obtenerEstadisticasPorEspecialidad($estado, $estatus, $area)
    {
        $cantFacPorEstadoEspc = $this->getInstance()->obtenerCantFacilitadorePorEsp($estado, $estatus, $area);
        $cantFacPorEstado = $this->getInstance()->obtenerCantFacilitadorePorEsp($estado, $estatus, "");
        
        if ($cantFacPorEstado == 0)
          $cantFacPorEstado = 1;
        
        return number_format( ($cantFacPorEstadoEspc / $cantFacPorEstado) * 100 , 2 );
    }
    
    public function obtenerEstadisticasPorEstado($estado, $estatus, $area)
    {
        $cantFacPorEstadoEspc = $this->getInstance()->obtenerCantFacilitadorePorEsp($estado, $estatus, $area);
        $cantFacPorEstado = $this->getInstance()->obtenerCantFacilitadorePorEsp("", $estatus, $area);
        
        if ($cantFacPorEstado == 0)
          $cantFacPorEstado = 1;
        
        return number_format( ($cantFacPorEstadoEspc / $cantFacPorEstado) * 100 , 2 );
    }

    public function obtenerEstPorEstados($estatus, $area)
    {
        $estados = Doctrine_Core::getTable('Estado')->getEstados();
        
        $estadisticas = array();
        foreach($estados as $estado)
        {
          $porcFacPorEstado = $this->obtenerEstadisticasPorEstado($estado->getId(), $estatus, $area);
          $estadisticas[$estado->getNombreEstado()] = $porcFacPorEstado;
        }
        
        return $estadisticas;
    }
    
    public function obtenerEstPorEspecialidad($estado, $estatus)
    {
        $areas = Doctrine_Core::getTable('AreasFormacion')->getAreasFormacion();
        
        $estadisticas = array();
        foreach($areas as $areaActual)
        {
          $porcFacPorArea = $this->obtenerEstadisticasPorEspecialidad($estado, $estatus, $areaActual->getId());
          $estadisticas[$areaActual->getNombreArea()] = $porcFacPorArea;
        }
        
        return $estadisticas;
    }

    public static function obtenerCantFacilitadorePorEsp($estado, $estatus, $area)
    {
        $w = "i.habilitado = true";
        if (strlen($estado) > 0)
          $w = $w. " and i.id_estado = $estado";
            
        if (strlen($estatus) > 0 && strlen($area) == 0)
          $w = $w. " and aff.estatus = $estatus";
        
        if (strlen($estatus) == 0 && strlen($area) > 0)
          $w = $w. " and aff.id_area_formacion = $area";
        
        if (strlen($estatus) > 0 && strlen($area) > 0)
          $w = $w. " and aff.estatus = $estatus and aff.id_area_formacion = $area";
        
        $q = Doctrine_Core::getTable('Identificacion')->createQuery("SELECT i FROM Identificacion i JOIN i.AreasFormacionFacilitador aff")->where($w);
        
        return $q->count();
    }

    public static function obtenerFacilitadores($cedula, $nombre, $apellido, $estado, $municipio, $parroquia, $estatus, $area)
    {
        $w = "";
        if (strlen($cedula) > 0)
          $w = $w. " and i.cedula_pasaporte like '%$cedula%'";

        if (strlen($nombre) > 0)
        {
          $nombre = strtolower($nombre);
          $w = $w. " and lower(i.nombre) like '%$nombre%'";
        }

        if (strlen($apellido) > 0)
        {
          $apellido = strtolower($apellido);
          $w = $w. " and lower(i.apellido) like '%$apellido%'";
        }

        if (strlen($estado) > 0)
          $w = $w. " and i.id_estado = $estado";

        if (strlen($municipio) > 0)
          $w = $w. " and i.id_municipio = $municipio";

        if (strlen($parroquia) > 0)
          $w = $w. " and i.id_parroquia = $parroquia";
            
        if (strlen($estatus) > 0 && strlen($area) == 0)
          $w = $w. " and i.habilitado = true and aff.estatus = $estatus";
        
        if (strlen($estatus) == 0 && strlen($area) > 0)
          $w = $w. " and i.habilitado = true and aff.id_area_formacion = $area";
        
        if (strlen($estatus) > 0 && strlen($area) > 0)
          $w = $w. " and i.habilitado = true and aff.estatus = $estatus and aff.id_area_formacion = $area";
        
        $q = Doctrine_Core::getTable('Identificacion')->createQuery("SELECT i FROM Identificacion i JOIN i.AreasFormacionFacilitador aff")->where("i.habilitado = true" . $w);
        
        return $q->execute();
    }
    
    public static function eliminarFacilitador($id)
    {
      Doctrine_Query::create()->update('Identificacion i')
        ->set('i.habilitado', '?', false)
        ->where('i.id = ?', $id)
        ->execute();
    }
}
