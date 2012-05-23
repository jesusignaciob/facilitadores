<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Correos', 'doctrine');

/**
 * BaseCorreos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_identificacion
 * @property string $correo
 * @property Identificacion $Identificacion
 * 
 * @method integer        getIdIdentificacion()  Returns the current record's "id_identificacion" value
 * @method string         getCorreo()            Returns the current record's "correo" value
 * @method Identificacion getIdentificacion()    Returns the current record's "Identificacion" value
 * @method Correos        setIdIdentificacion()  Sets the current record's "id_identificacion" value
 * @method Correos        setCorreo()            Sets the current record's "correo" value
 * @method Correos        setIdentificacion()    Sets the current record's "Identificacion" value
 * 
 * @package    facilitadores
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorreos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('correos');
        $this->hasColumn('id_identificacion', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('correo', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Identificacion', array(
             'local' => 'id_identificacion',
             'foreign' => 'id'));
    }
}