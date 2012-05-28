<?php

/**
 * AreasFormacionFacilitadorTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AreasFormacionFacilitadorTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AreasFormacionFacilitadorTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AreasFormacionFacilitador');
    }
    
    public static function obtenerAreasFormacionPorFacilitador($idFacilitador)
    {
        $q = Doctrine_Query::create()
                ->from('AreasFormacionFacilitador aff')
                ->where('aff.id_identificacion = ?', $idFacilitador);
                
        return $q->execute();
    }
    
    static protected $estatus = array(
      '' => '',
      '0' => 'En fomación',
      '1' => 'Formado',
      '2' => 'Convocado',
      '3' => 'Activo',
      '4' => 'Inactivo',
    );
    
    public function getstatus()
    {
		  return self::$estatus;
	  }
}
