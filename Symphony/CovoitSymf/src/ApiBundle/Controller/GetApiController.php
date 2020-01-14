<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\Categorie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GetApiController extends Controller
{
    public function GetAllCategorieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //recuperation de la liste des internaute au travers du repository
        $categories = $em->getRepository('BackOfficeBundle:Categorie')->findByCategorieOrderedRest();

        //reponse du controlleur en indiquant le format JSON et
        //en ajoutant la balise "Access-Control-Allow-Origin"
        //dans l'en-tete HTTP pour eviter les probleme de refus du au CORS
        $response = new Response();
        
        $response->setContent(json_encode($categories));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
