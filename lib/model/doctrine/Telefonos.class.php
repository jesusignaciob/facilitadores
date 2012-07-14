<!--
Document / Documento: Telefonos.class

Created on / Creado : 23/05/2012, 10:39:10 AM

Author / Desarrolladores:
1. Raúl Lobo 04267711578 andrescerrada@gmail.com
2. José Ruiz 04265752819 jruiz@cenditel.gob.ve joseph2283@gmail.com
3. Jesús Becerra 04263779960 jbecerra@cenditel.gob.ve jesusignaciob@gmail.com
4. Rodolfo Sumoza 04166342086 rsumoza@cenditel.gob.ve rsumoza@gmail.com

Description / Comentarios:
Este archivo genera las siguientes funciones:
1- Retorna el numero de teléfonos.
-->
<?php

/**
 * Telefonos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    facilitadores
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Telefonos extends BaseTelefonos
{
//Función que Retorna el numero de teléfonos.
    public function __toString() {
    return $this->getnumero();
  }
}
