<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DisponibilidadTrasladoEstado', 'doctrine');

/**
 * BaseDisponibilidadTrasladoEstado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_identificacion
 * @property integer $id_estado
 * @property integer $id_municipio
 * @property boolean $requiere_traslado
 * @property Estado $Estado
 * @property Identificacion $Identificacion
 * @property Municipio $Municipio
 * 
 * @method integer                      getIdIdentificacion()  Returns the current record's "id_identificacion" value
 * @method integer                      getIdEstado()          Returns the current record's "id_estado" value
 * @method integer                      getIdMunicipio()       Returns the current record's "id_municipio" value
 * @method boolean                      getRequiereTraslado()  Returns the current record's "requiere_traslado" value
 * @method Estado                       getEstado()            Returns the current record's "Estado" value
 * @method Identificacion               getIdentificacion()    Returns the current record's "Identificacion" value
 * @method Municipio                    getMunicipio()         Returns the current record's "Municipio" value
 * @method DisponibilidadTrasladoEstado setIdIdentificacion()  Sets the current record's "id_identificacion" value
 * @method DisponibilidadTrasladoEstado setIdEstado()          Sets the current record's "id_estado" value
 * @method DisponibilidadTrasladoEstado setIdMunicipio()       Sets the current record's "id_municipio" value
 * @method DisponibilidadTrasladoEstado setRequiereTraslado()  Sets the current record's "requiere_traslado" value
 * @method DisponibilidadTrasladoEstado setEstado()            Sets the current record's "Estado" value
 * @method DisponibilidadTrasladoEstado setIdentificacion()    Sets the current record's "Identificacion" value
 * @method DisponibilidadTrasladoEstado setMunicipio()         Sets the current record's "Municipio" value
 * 
 * @package    facilitadores
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDisponibilidadTrasladoEstado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('disponibilidad_traslado_estado');
        $this->hasColumn('id_identificacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_estado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_municipio', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('requiere_traslado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Estado', array(
             'local' => 'id_estado',
             'foreign' => 'id'));

        $this->hasOne('Identificacion', array(
             'local' => 'id_identificacion',
             'foreign' => 'id'));

        $this->hasOne('Municipio', array(
             'local' => 'id_municipio',
             'foreign' => 'id'));
    }
}