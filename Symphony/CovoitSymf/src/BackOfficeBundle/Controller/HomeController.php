<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Utilisateur;
use BackOfficeBundle\Entity\Trajet;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $utilisateurs = $em->getRepository('BackOfficeBundle:Utilisateur')->findBy(array(), array('id' => 'DESC'));
        
        $trajets = $em->getRepository('BackOfficeBundle:Trajet')->findBy(array(), array('id' => 'DESC'));

        $Co2 = $em->createQuery(
                'SELECT SUM(co2.valCo2) FROM BackOfficeBundle:Covoiturage AS covoit JOIN BackOfficeBundle:Co2 AS co2 WITH covoit.idCo2 = co2.id WHERE DATE_DIFF(CURRENT_DATE(), covoit.created)<30'
            )->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        //$Co2 = 2;
        return $this->render('home/home.html.twig', array(
            'utilisateurs' => $utilisateurs,
            'trajets' => $trajets,
            'Co2' => $Co2[0][1]
        ));
    }
}
