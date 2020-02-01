
<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErrorController extends Controller
{
    public function indexAction()
    {
         return $this->render('@BackOffice/error.html.twig');
    }
}
