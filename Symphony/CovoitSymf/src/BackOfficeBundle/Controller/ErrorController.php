<?php
/**
  * page d'erreur du backoffice
  *
  * @author: Huguen Clément
  * @author: Marius Bethelot
  * @version: 1.0
  */

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErrorController extends Controller
{
    public function indexAction()
    {
         return $this->render('@BackOffice/error.html.twig');
    }
}
