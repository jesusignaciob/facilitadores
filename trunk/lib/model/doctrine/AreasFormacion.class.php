<?php

/**
 * AreasFormacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    facilitadores
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class AreasFormacion extends BaseAreasFormacion
{
	//Funcion para obtener los nombres de las areas de formacion de la tabla areas_formacion
	public function __toString() 
	{
    		return $this->getnombre_area();
  	}
}