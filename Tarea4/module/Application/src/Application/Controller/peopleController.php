<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use zend\Text\Table;

class peopleController extends AbstractActionController
{
 

public function peopleAction()
    { 
         $saludo = array(
            array("Nombre" => "Juan"),
            array("Nombre" => "Carlos"),
            array("Nombre" => "Pedro"),
            array("Nombre" => "Camilo"),
            array("Nombre" =>"jose"));
         $email = array(
            array("Email" => "juan@gmail.com"),
            array("Email" => "Carlos@gmail.com"),
            array("Email" => "Pedro@gmail.com"),
            array("Email" => "Camilo@gmail.com"),
            array("Email" => "Jose@gmail.com"));
 return new ViewModel(array('saludo'=> $saludo , 'email'=> $email));
    } 
}
 