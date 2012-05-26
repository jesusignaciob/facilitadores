<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Secciones', 'doctrine');

/**
 * BaseSecciones
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_identificacion
 * @property integer $id_area_formacion_facilitador
 * @property string $nombre_seccion
 * @property integer $id_ente
 * @property AreasFormacionFacilitador $AreasFormacionFacilitador
 * @property Ente $Ente
 * @property Identificacion $Identificacion
 * @property Doctrine_Collection $BitacoraSecciones
 * 
 * @method integer                   getIdIdentificacion()              Returns the current record's "id_identificacion" value
 * @method integer                   getIdAreaFormacionFacilitador()    Returns the current record's "id_area_formacion_facilitador" value
 * @method string                    getNombreSeccion()                 Returns the current record's "nombre_seccion" value
 * @method integer                   getIdEnte()                        Returns the current record's "id_ente" value
 * @method AreasFormacionFacilitador getAreasFormacionFacilitador()     Returns the current record's "AreasFormacionFacilitador" value
 * @method Ente                      getEnte()                          Returns the current record's "Ente" value
 * @method Identificacion            getIdentificacion()                Returns the current record's "Identificacion" value
 * @method Doctrine_Collection       getBitacoraSecciones()             Returns the current record's "BitacoraSecciones" collection
 * @method Secciones                 setIdIdentificacion()              Sets the current record's "id_identificacion" value
 * @method Secciones                 setIdAreaFormacionFacilitador()    Sets the current record's "id_area_formacion_facilitador" value
 * @method Secciones                 setNombreSeccion()                 Sets the current record's "nombre_seccion" value
 * @method Secciones                 setIdEnte()                        Sets the current record's "id_ente" value
 * @method Secciones                 setAreasFormacionFacilitador()     Sets the current record's "AreasFormacionFacilitador" value
 * @method Secciones                 setEnte()                          Sets the current record's "Ente" value
 * @method Secciones                 setIdentificacion()                Sets the current record's "Identificacion" value
 * @method Secciones                 setBitacoraSecciones()             Sets the current record's "BitacoraSecciones" collection
 * 
 * @package    facilitadores
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSecciones extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('secciones');
        $this->hasColumn('id_identificacion', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_area_formacion_facilitador', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre_seccion', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('id_ente', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AreasFormacionFacilitador', array(
             'local' => 'id_area_formacion_facilitador',
             'foreign' => 'id'));

        $this->hasOne('Ente', array(
             'local' => 'id_ente',
             'foreign' => 'id'));

        $this->hasOne('Identificacion', array(
             'local' => 'id_identificacion',
             'foreign' => 'id'));

        $this->hasMany('BitacoraSecciones', array(
             'local' => 'id',
             'foreign' => 'id_secciones'));
    }
}