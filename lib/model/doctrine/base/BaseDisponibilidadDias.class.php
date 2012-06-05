<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DisponibilidadDias', 'doctrine');

/**
 * BaseDisponibilidadDias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_identificacion
 * @property integer $dia
 * @property Identificacion $Identificacion
 * @property Doctrine_Collection $DisponibilidadTurnos
 * 
 * @method integer             getIdIdentificacion()     Returns the current record's "id_identificacion" value
 * @method integer             getDia()                  Returns the current record's "dia" value
 * @method Identificacion      getIdentificacion()       Returns the current record's "Identificacion" value
 * @method Doctrine_Collection getDisponibilidadTurnos() Returns the current record's "DisponibilidadTurnos" collection
 * @method DisponibilidadDias  setIdIdentificacion()     Sets the current record's "id_identificacion" value
 * @method DisponibilidadDias  setDia()                  Sets the current record's "dia" value
 * @method DisponibilidadDias  setIdentificacion()       Sets the current record's "Identificacion" value
 * @method DisponibilidadDias  setDisponibilidadTurnos() Sets the current record's "DisponibilidadTurnos" collection
 * 
 * @package    facilitadores
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDisponibilidadDias extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('disponibilidad_dias');
        $this->hasColumn('id_identificacion', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('dia', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Identificacion', array(
             'local' => 'id_identificacion',
             'foreign' => 'id'));

        $this->hasMany('DisponibilidadTurnos', array(
             'local' => 'id',
             'foreign' => 'id_disponibilidad_dia'));
    }
}