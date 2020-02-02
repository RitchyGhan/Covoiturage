<?php
/**
   * @Author: Huguen Clément
   * @Author: Marius Bethelot
   */

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity;
use BackOfficeBundle\Entity\Covoiturage;
use BackOfficeBundle\Entity\Trajet;
use BackOfficeBundle\Entity\Utilisateur;
use BackOfficeBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Form\FormTypeInterface; 

class PostApiController extends Controller
{
    public function postNewCovoiturageAction(Request $request)
    {
        $erreur = FALSE;

        $covoiturage = new Covoiturage();
        $covoiturage->setCreated(new \DateTime('now'));
        $covoiturage->setUpdated(new \DateTime('now'));
        $form = $this->createForm('BackOfficeBundle\Form\CovoiturageType',$covoiturage);
        
        $form->submit($request->request->all()); // Validation des donnees

        $em = $this->get('doctrine.orm.entity_manager');
        //$em = $this->getDoctrine()->getManager();
        $em->persist($covoiturage);
        $em->flush();
        
        $encoders = [ new JsonEncoder()];
        
        $normalizers = [ new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response();
        if($erreur){
            $response->setContent(json_encode("erreur enregistrement donnees"));
        } else {
            $response->setContent($serializer->serialize($covoiturage, 'json'));
        }
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function postNewTrajetAction(Request $request)
    {
        $erreur = FALSE;

        $trajet = new Trajet();
        $trajet->setDateDepart(new \DateTime($request->request->get('dateDepart')));
        $trajet->setHeureDepart(new \DateTime($request->request->get('heureDepart')));
        $form = $this->createForm('BackOfficeBundle\Form\TrajetType',$trajet);
        $form->submit($request->request->all()); // Validation des donnees

        $em = $this->get('doctrine.orm.entity_manager');
        $em->persist($trajet);
        $em->flush();

        $encoders = [new JsonEncoder()];
        
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response();
        if($erreur){
            $response->setContent(json_encode("erreur enregistrement donnees"));
        } else {
            $response->setContent($serializer->serialize($trajet, 'json'));
        }
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
    
    public function modifyUtilisateurAction(Request $request)
    {
        $erreur = FALSE;

        $utilisateur = new Utilisateur();
        
        $em = $this->get('doctrine.orm.entity_manager');

        $utilisateur = $em->getRepository("BackOfficeBundle:Utilisateur")->findOneById($request->request->get('id'));
    
    
        $form = $this->createForm('BackOfficeBundle\Form\UtilisateurType',$utilisateur);
        $form->submit($request->request->all()); // Validation des donnees
        
        //$em->persist($utilisateur);
        $em->flush();
        
        $encoders = [new JsonEncoder()];
        
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response();
        if($erreur){
            $response->setContent(json_encode("erreur enregistrement donnees"));
        } else {
            $response->setContent($serializer->serialize($utilisateur, 'json'));
        }
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}
