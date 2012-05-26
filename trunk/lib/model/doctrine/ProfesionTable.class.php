<?php

/**
 * ProfesionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProfesionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProfesionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Profesion');
    }
     public static function obtenerProfesionPorFacilitador($idFacilitador)
    {
        $q = Doctrine_Query::create()
                ->from('Profesion pf')
                ->where('pf.id_identificacion = ?', $idFacilitador);
                
        return $q->execute();
    }
}