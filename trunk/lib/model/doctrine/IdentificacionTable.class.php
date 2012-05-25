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

    public static function obtenerFacilitadores($cedula, $nombre, $apellido, $estado, $municipio, $parroquia)
    {
        $q = Doctrine_Query::create()
                ->from('Identificacion i');
        if (strlen($cedula) > 0)
            $q = $q->where("i.cedula_pasaporte like '%$cedula%'");

        if (strlen($nombre) > 0)
            $q = $q->where("i.nombre like '%$nombre%'");

        if (strlen($apellido) > 0)
            $q = $q->where("i.apellido like '%$apellido%'");

        if ($estado > 0)
            $q = $q->where('i.id_estado = ?', $estado);

        if ($municipio > 0)
            $q = $q->where('i.id_municipio = ?', $municipio);

        if ($parroquia > 0)
            $q = $q->where('i.id_parroquia = ?', $parroquia);

        return $q->execute();
    }
}