<?php

/**
 * OcupacionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OcupacionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object OcupacionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Ocupacion');
    }
     public static function obtenerOcupacionPorFacilitador($idFacilitador)
    {
        $q = Doctrine_Query::create()
                ->from('Ocupacion of')
                ->where('of.id_identificacion = ?', $idFacilitador);
                
        return $q->execute();
    }
}
