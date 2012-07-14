<!--
Document / Documento: ProfesionTable.class

Created on / Creado : 23/05/2012, 10:39:10 AM

Author / Desarrolladores:
1. Raúl Lobo 04267711578 andrescerrada@gmail.com
2. José Ruiz 04265752819 jruiz@cenditel.gob.ve joseph2283@gmail.com
3. Jesús Becerra 04263779960 jbecerra@cenditel.gob.ve jesusignaciob@gmail.com
4. Rodolfo Sumoza 04166342086 rsumoza@cenditel.gob.ve rsumoza@gmail.com

Description / Comentarios:
Este archivo genera las siguientes funciones:
1- Obtiene Profesion.
2- Obtiene Profesion Por Facilitador.
-->
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
//Función que Obtiene Profesion.
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Profesion');
    }
//Función que Obtiene Profesion Por Facilitador.
     public static function obtenerProfesionPorFacilitador($idFacilitador)
    {
        $q = Doctrine_Query::create()
                ->from('Profesion pf')
                ->where('pf.id_identificacion = ?', $idFacilitador);
                
        return $q->execute();
    }
     
        public static function eliminarProfesion($id_profesion)
	{
 	 $deleted = Doctrine_Query::create()
  	->delete()
  	->from('Profesion')
  	->andWhere('id = ?', $id_profesion)
  	->execute();
	}
}
