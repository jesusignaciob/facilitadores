<?php

/**
 * DisponibilidadTrasladoEstadoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DisponibilidadTrasladoEstadoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object DisponibilidadTrasladoEstadoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DisponibilidadTrasladoEstado');
    }
    
    public static function obtenerDisponibilidadTraslado($idFacilitador)
    {
        $q = Doctrine_Query::create()
                ->from('DisponibilidadTrasladoEstado dte')
                ->where('dte.id_identificacion = ?', $idFacilitador);
                
        return $q->execute();
    }
}
