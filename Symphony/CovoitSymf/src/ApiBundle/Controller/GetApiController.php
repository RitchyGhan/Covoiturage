<?php
 /**
  * Controller API de la methode GET
  
  * @author: Huguen Clément
  * @author: Marius Bethelot
  * @version: 1.0
  */

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GetApiController extends Controller
{

    public function GetAllCategorieAction(Request $request)
    {

        //recuperation de la liste des internaute au travers du repository
        //$categories = $em->getRepository('BackOfficeBundle:Categorie')->findByCategorieOrderedRest(); marche po :´(

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Categorie i ORDER BY i.categorie ASC'
            );
        $categories = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        //reponse du controlleur en indiquant le format JSON et
        //en ajoutant la balise "Access-Control-Allow-Origin"
        //dans l'en-tete HTTP pour eviter les probleme de refus du au CORS
        $response = new Response();
        
        $response->setContent(json_encode($categories));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneCategorieAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Categorie i WHERE i.id =:id'
            )->setParameter('id', $id);
        $categorie = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($categorie));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllCo2Action(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Co2 i ORDER BY i.id ASC'
            );
        $co2 = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        
        $response->setContent(json_encode($co2));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneCo2Action(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Co2 i WHERE i.id = :id'
            )->setParameter('id', $id);
        $co2 = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($co2));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllMarqueAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Marque i ORDER BY i.marque ASC'
            );
        $marques = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        
        $response->setContent(json_encode($marques));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneMarqueAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Marque i WHERE i.id = :id'
            )->setParameter('id', $id);
        $marque = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($marque));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllTypeCovoitAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:TypeCovoit i ORDER BY i.type ASC'
            );
        $typeCovoit = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        
        $response->setContent(json_encode($typeCovoit));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneTypeCovoitAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:TypeCovoit i WHERE i.id = :id'
            )->setParameter('id', $id);
        $typeCovoit = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($typeCovoit));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllTypeTrajetAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:TypeTrajet i ORDER BY i.typeTrajet ASC'
            );
        $typeTrajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        
        $response->setContent(json_encode($typeTrajet));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneTypeTrajetAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:TypeTrajet i WHERE i.id = :id'
            )->setParameter('id', $id);
        $typeTrajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($typeTrajet));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllTypeVehiculeAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:TypeVehicule i ORDER BY i.id ASC'
            );
        $typeVehicule = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        
        $response->setContent(json_encode($typeVehicule));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneTypeVehiculeAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:TypeVehicule i WHERE i.id = :id'
            )->setParameter('id', $id);
        $typeVehicule = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($typeVehicule));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllVilleAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Ville i ORDER BY i.ville ASC'
            );
        $villes = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        
        $response->setContent(json_encode($villes));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneVilleAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Ville i WHERE i.id = :id'
            )->setParameter('id', $id);
        $ville = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $response = new Response();
        
        $response->setContent(json_encode($ville));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllVoitureAction(Request $request)
    {
        //Voiture de base 
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Voiture i ORDER BY i.modele ASC'
            );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        // Marque voiture
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Voiture i JOIN BackOfficeBundle:Marque AS j WITH j.id = i.idMarque ORDER BY i.modele ASC'
            );

        $marque = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($marque as $value){
            $voiture[$i]['marque_voiture'] = $value;
            $i ++;
        }

        // type voiture
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Voiture i JOIN BackOfficeBundle:TypeVehicule AS j WITH j.id = i.idTypeVehicule ORDER BY i.modele ASC'
            );

        $typeVehicule = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $i = 0;
        foreach ($typeVehicule as $value){
            $voiture[$i]['type_vehicule_voiture'] = $value;
            $i ++;
        }

        $response = new Response();
        
        $response->setContent(json_encode($voiture));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneVoitureAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Voiture i WHERE i.id = :id'
            )->setParameter('id', $id);
        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        // Marque voiture
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Voiture i JOIN BackOfficeBundle:Marque AS j WITH j.id = i.idMarque WHERE i.id = :id'
            )->setParameter('id', $id);

        $voiture[0]['marque_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        // type voiture
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Voiture i JOIN BackOfficeBundle:TypeVehicule AS j WITH j.id = i.idTypeVehicule WHERE i.id = :id'
            )->setParameter('id', $id);

        $voiture[0]['type_vehicule_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        
        $response = new Response();
        
        $response->setContent(json_encode($voiture));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllUtilisateurAction(Request $request)
    {
        // user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Utilisateur i ORDER BY i.nom ASC'
            );
        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //user Ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Utilisateur i JOIN BackOfficeBundle:Ville AS j WITH j.id = i.idVille ORDER BY i.nom ASC'
            );

        $ville = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($ville as $value){
            $user[$i]['ville_utilisateur'] = $value;
            $i ++;
        }

        //user Categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Utilisateur i JOIN BackOfficeBundle:Categorie AS j WITH j.id = i.idCategorie ORDER BY i.nom ASC'
            );

        $categorie = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($categorie as $value){
            $user[$i]['categorie_utilisateur'] = $value;
            $i ++;
        }

        $response = new Response();
        
        $response->setContent(json_encode($user));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneUtilisateurAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Utilisateur i WHERE i.id = :id'
            )->setParameter('id', $id);
        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Utilisateur i JOIN BackOfficeBundle:Ville AS j WITH j.id = i.idVille WHERE i.id = :id'
            )->setParameter('id', $id);

        $user[0]['ville_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Utilisateur i JOIN BackOfficeBundle:Categorie AS j WITH j.id = i.idCategorie WHERE i.id = :id'
            )->setParameter('id', $id);

        $user[0]['categorie_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        
        
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j.id, j.immatriculation, j.nbPlace, v.id AS idVoiture FROM BackOfficeBundle:Utilisateur i JOIN BackOfficeBundle:Possede AS j WITH j.idUtilisateur = i.id JOIN BackOfficeBundle:Voiture AS v WITH v.id = j.idVoiture WHERE i.id = :id'
            )->setParameter('id', $id);
        
        $user[0]['possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        
        for($i=0; $i<count($user[0]['possede']); $i++)
        {
            $id = $user[0]['possede'][$i]['idVoiture'];
            //possede voiture base
            $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH i.idVoiture = j.id WHERE i.id = :id'
            )->setParameter('id', $id);

            $user[0]['possede'][$i]['voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede voiture marque
            $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:Marque AS k WITH k.id = j.idMarque WHERE i.id = :id'
            )->setParameter('id', $id);

            $user[0]['possede'][$i]['voiture']['marque'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede voiture type vehicule
            $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:TypeVehicule AS k WITH k.id = j.idTypeVehicule WHERE i.id = :id'
            )->setParameter('id', $id);

            $user[0]['possede'][$i]['voiture']['type_vehicule'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
            unset($user[0]['possede'][$i]['idVoiture']);
        }
        
        
        
        $response = new Response();
        
        $response->setContent(json_encode($user));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllPossedeAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Possede i ORDER BY i.immatriculation ASC'
            );
        $possede = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //USER PART :

        //Possede user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur ORDER BY i.immatriculation ASC'
            );

        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $possede[$i]['utilisateur_possede'] = $value;
            $i ++;
        }

        //Possede user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille ORDER BY i.immatriculation ASC'
            );

        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $possede[$i]['utilisateur_possede']['ville_utilisateur'] = $value;
            $i ++;
        }

        //Possede user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Categorie AS k WITH k.id = j.idCategorie ORDER BY i.immatriculation ASC'
            );

        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $possede[$i]['utilisateur_possede']['categorie_utilisateur'] = $value;
            $i ++;
        }

        // VOITURE PART :

        //Possede voiture base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture ORDER BY i.immatriculation ASC'
            );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($voiture as $value){
            $possede[$i]['voiture_possede'] = $value;
            $i ++;
        }

        //Possede voiture Marque
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:Marque AS k WITH k.id = j.idMarque ORDER BY i.immatriculation ASC'
            );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($voiture as $value){
            $possede[$i]['voiture_possede']['marque_voiture'] = $value;
            $i ++;
        }

        //Possede voiture type Vehicule
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:TypeVehicule AS k WITH k.id = j.idTypeVehicule ORDER BY i.immatriculation ASC'
            );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($voiture as $value){
            $possede[$i]['voiture_possede']['type_vehicule_voiture'] = $value;
            $i ++;
        }

        $response = new Response();
        
        $response->setContent(json_encode($possede));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOnePossedeAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Possede i WHERE i.id = :id'
            )->setParameter('id', $id);
        $possede = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //USER PART :

        //possede user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur WHERE i.id = :id'
            )->setParameter('id', $id);

        $possede[0]['utilisateur_possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille WHERE i.id = :id'
            )->setParameter('id', $id);

        $possede[0]['utilisateur_possede']['ville_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Categorie AS k WITH k.id = j.idCategorie WHERE i.id = :id'
            )->setParameter('id', $id);

        $possede[0]['utilisateur_possede']['Categorie_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //VOITURE PART :

        //possede voiture base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture WHERE i.id = :id'
            )->setParameter('id', $id);

        $possede[0]['voiture_possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede voiture marque
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:Marque AS k WITH k.id = j.idMarque WHERE i.id = :id'
            )->setParameter('id', $id);

        $possede[0]['voiture_possede']['marque_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede voiture type vehicule
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:TypeVehicule AS k WITH k.id = j.idTypeVehicule WHERE i.id = :id'
            )->setParameter('id', $id);

        $possede[0]['voiture_possede']['type_vehicule_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];


        
        $response = new Response();
        
        $response->setContent(json_encode($possede));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllTrajetAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Trajet i ORDER BY i.dateDepart ASC'
            );
        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //Trajet Ville Depart
         $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Ville AS j WITH j.id = i.idVille ORDER BY i.dateDepart ASC'
            );

        $ville = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($ville as $value){
            $trajet[$i]['ville_depart_trajet'] = $value;
            $i ++;
        }

        //Trajet Ville Arriver
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Ville AS j WITH j.id = i.idVilleVilleArrivee ORDER BY i.dateDepart ASC'
            );

        $ville = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($ville as $value){
            $trajet[$i]['ville_arrivee_trajet'] = $value;
            $i ++;
        }
        //Trajet type_trajet
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:TypeTrajet AS j WITH j.id = i.idTypeTrajet ORDER BY i.dateDepart ASC'
            );

        $typeTrajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($typeTrajet as $value){
            $trajet[$i]['type_trajet_trajet'] = $value;
            $i ++;
        }


        //POSSEDE PARTIE

        //possede base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede ORDER BY i.dateDepart ASC'
            );

        $possede = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($possede as $value){
            $trajet[$i]['possede_trajet'] = $value;
            $i ++;
        }

        //POSSEDE USER PART

        // possede user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Utilisateur AS k WITH k.id = j.idUtilisateur ORDER BY i.dateDepart ASC'
            );

        $possede = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($possede as $value){
            $trajet[$i]['possede_trajet']['utilisateur_possede'] = $value;
            $i ++;
        }
        //possede user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Utilisateur AS k WITH k.id = j.idUtilisateur JOIN BackOfficeBundle:Ville AS l WITH l.id = k.idVille ORDER BY i.dateDepart ASC'
            );

        $possede = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($possede as $value){
            $trajet[$i]['possede_trajet']['utilisateur_possede']['ville_utilisateur'] = $value;
            $i ++;
        }

        //possede user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Utilisateur AS k WITH k.id = j.idUtilisateur JOIN BackOfficeBundle:Categorie AS l WITH l.id = k.idCategorie ORDER BY i.dateDepart ASC'
            );

        $possede = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($possede as $value){
            $trajet[$i]['possede_trajet']['utilisateur_possede']['categorie_utilisateur'] = $value;
            $i ++;
        }
        
        //POSSEDE VOITURE PART

        //possede voiture base
        $query = $this->getDoctrine()->getEntityManager()
        ->createQuery(
            'SELECT k FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Voiture AS k WITH k.id = j.idVoiture ORDER BY i.dateDepart ASC'
        );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    
        $i = 0;
        foreach ($voiture as $value){
            $trajet[$i]['possede_trajet']['voiture_possede'] = $value;
            $i ++;
        }

        //possede voiture marque
        $query = $this->getDoctrine()->getEntityManager()
        ->createQuery(
            'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Voiture AS k WITH k.id = j.idVoiture JOIN BackOfficeBundle:Marque AS l WITH l.id = k.idMarque ORDER BY i.dateDepart ASC'
        );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    
        $i = 0;
        foreach ($voiture as $value){
            $trajet[$i]['possede_trajet']['voiture_possede']['marque_voiture'] = $value;
            $i ++;
        }

        //possede voiture type vehicule
        $query = $this->getDoctrine()->getEntityManager()
        ->createQuery(
            'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Voiture AS k WITH k.id = j.idVoiture JOIN BackOfficeBundle:TypeVehicule AS l WITH l.id = k.idTypeVehicule ORDER BY i.dateDepart ASC'
        );

        $voiture = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    
        $i = 0;
        foreach ($voiture as $value){
            $trajet[$i]['possede_trajet']['voiture_possede']['type_vehicule_voiture'] = $value;
            $i ++;
        }


        $response = new Response();
        
        $response->setContent(json_encode($trajet));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneTrajetAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Trajet i WHERE i.id = :id'
            )->setParameter('id', $id);
        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //Trajet Ville Depart
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Ville AS j WITH j.id = i.idVille  WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['ville_depart_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //Trajet Ville Arriver
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Ville AS j WITH j.id = i.idVilleVilleArrivee  WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['ville_arrivee_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //Trajet type_trajet
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:TypeTrajet AS j WITH j.id = i.idTypeTrajet  WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['type_trajet_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];



        //POSSEDE PARTIE

        //possede base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede  WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];


        //POSSEDE USER PART

        //possede user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Utilisateur as k WITH k.id = j.idUtilisateur WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet']['utilisateur_possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        

        //possede user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Utilisateur as k WITH k.id = j.idUtilisateur JOIN BackOfficeBundle:Ville AS l WITH l.id = k.idVille WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet']['utilisateur_possede']['ville_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Utilisateur as k WITH k.id = j.idUtilisateur JOIN BackOfficeBundle:Categorie AS l WITH l.id = k.idCategorie WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet']['utilisateur_possede']['categorie_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        
        //POSSEDE VOITURE PART

        //possede voiture base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Voiture as k WITH k.id = j.idVoiture WHERE i.id = id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet']['voiture_possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede voiture marque
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Voiture as k WITH k.id = j.idVoiture JOIN BackOfficeBundle:Marque AS l WITH l.id = k.idMarque WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet']['voiture_possede']['marque_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //possede voiture type vehicule
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Trajet i JOIN BackOfficeBundle:Possede AS j WITH j.id = i.idPossede JOIN BackOfficeBundle:Voiture as k WITH k.id = j.idVoiture JOIN BackOfficeBundle:TypeVehicule AS l WITH l.id = k.idTypeVehicule WHERE i.id = :id'
            )->setParameter('id', $id);

        $trajet[0]['possede_trajet']['voiture_possede']['type_vehicule_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        
        
        $response = new Response();
        
        $response->setContent(json_encode($trajet));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetAllCovoiturageAction(Request $request)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Covoiturage i ORDER BY i.created ASC'
            );
        $covoiturage = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //Covoiturage type covoit
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:TypeCovoit AS j WITH j.id = i.idTypeCovoit ORDER BY i.created ASC'
            );

        $covoit = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($covoit as $value){
            $covoiturage[$i]['type_covoit_covoiturage'] = $value;
            $i ++;
        }

        //covoiturage CO2
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Co2 AS j WITH j.id = i.idCo2 ORDER BY i.created ASC'
            );

        $co2 = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($co2 as $value){
            $covoiturage[$i]['co2_covoiturage'] = $value;
            $i ++;
        }


        //USER PART :

        //Covoiturage user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur ORDER BY i.created ASC'
            );

        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $covoiturage[$i]['utilisateur_covoiturage'] = $value;
            $i ++;
        }

        //covoiturage user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille ORDER BY i.created ASC'
            );

        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $covoiturage[$i]['utilisateur_covoiturage']['ville_utilisateur'] = $value;
            $i ++;
        }
        //covoiturage user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Categorie AS k WITH k.id = j.idCategorie ORDER BY i.created ASC'
            );

        $user = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $covoiturage[$i]['utilisateur_covoiturage']['categorie_utilisateur'] = $value;
            $i ++;
        }


        //TRAJET PART :

        //Covoiturage trajet base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage'] = $value;
            $i ++;
        }

        //Covoiturage Trajet Ville Depart
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['ville_depart_trajet'] = $value;
            $i ++;
        }
        //Covoiturage Trajet Ville Arriver
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVilleVilleArrivee ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['ville_arrivee_trajet'] = $value;
            $i ++;
        }

        //Covoiturage Trajet type_trajet
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:TypeTrajet AS k WITH k.id = j.idTypeTrajet ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['type_trajet_trajet'] = $value;
            $i ++;
        }


        //TRAJET POSSEDE PARTIE

        //trajet possede base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet'] = $value;
            $i ++;
        }


        //TRAJET POSSEDE USER PART

        //trajet possede user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['utilisateur_possede'] = $value;
            $i ++;
        }

        //trajet possede user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur JOIN BackOfficeBundle:Ville AS m WITH m.id = l.idVille ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['utilisateur_possede']['ville_utilisateur'] = $value;
            $i ++;
        }

        //trajet possede user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur JOIN BackOfficeBundle:Categorie AS m WITH m.id = l.idCategorie ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['utilisateur_possede']['categorie_utilisateur'] = $value;
            $i ++;
        }
        
        //TRAJET POSSEDE VOITURE PART

        //trajet possede voiture base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['voiture_possede'] = $value;
            $i ++;
        }

        //trajet possede voiture marque
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture JOIN BackOfficeBundle:Marque AS m WITH m.id = l.idMarque ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['voiture_possede']['marque_voiture'] = $value;
            $i ++;
        }

        //trajet possede voiture type vehicule
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture JOIN BackOfficeBundle:TypeVehicule AS m WITH m.id = l.idTypeVehicule ORDER BY i.created ASC'
            );

        $trajet = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['voiture_possede']['type_vehicule_voiture'] = $value;
            $i ++;
        }

        $response = new Response();
        
        $response->setContent(json_encode($covoiturage));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function GetOneCovoiturageAction(Request $request, $id)
    {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Covoiturage i WHERE i.id = :id'
            )->setParameter('id', $id);
        $covoiturage = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        //Covoiturage type covoit
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:TypeCovoit AS j WITH j.id = i.idTypeCovoit WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['type_covoit_covoiturage'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        
        //covoiturage CO2
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Co2 AS j WITH j.id = i.idCo2 WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['co2_covoiturage'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];


        //USER PART :

        //Covoiturage user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['utilisateur_covoiturage'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //covoiturage user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['utilisateur_covoiturage']['ville_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //covoiturage user categorie
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Categorie AS k WITH k.id = j.idCategorie WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['utilisateur_covoiturage']['categorie_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];



        //TRAJET PART :

        //Covoiturage trajet base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //Covoiturage Trajet Ville Depart
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['ville_depart_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //Covoiturage Trajet Ville Arriver
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVilleVilleArrivee WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['ville_arrivee_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        

        //Covoiturage Trajet type_trajet
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:TypeTrajet AS k WITH k.id = j.idTypeTrajet WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['type_trajet_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        


        //TRAJET POSSEDE PARTIE

        //trajet possede base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];


        //TRAJET POSSEDE USER PART

        //trajet possede user base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet']['utilisateur_possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];
        

        //trajet possede user ville
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur JOIN BackOfficeBundle:Ville AS m WITH m.id = l.idVille WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet']['utilisateur_possede']['ville_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //trajet possede user categorie
        $query = $this->getDoctrine()->getEntityManager()
        ->createQuery(
            'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur JOIN BackOfficeBundle:Categorie AS m WITH m.id = l.idCategorie WHERE i.id = :id'
        )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet']['utilisateur_possede']['categorie_utilisateur'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];



        //TRAJET POSSEDE VOITURE PART

        //trajet possede voiture base
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet']['voiture_possede'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];


        //trajet possede voiture marque
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture JOIN BackOfficeBundle:Marque AS m WITH m.id = l.idMarque WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet']['voiture_possede']['marque_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        //trajet possede voiture type vehicule
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture JOIN BackOfficeBundle:TypeVehicule AS m WITH m.id = l.idTypeVehicule WHERE i.id = :id'
            )->setParameter('id', $id);

        $covoiturage[0]['trajet_covoiturage']['possede_trajet']['voiture_possede']['type_vehicule_voiture'] = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)[0];

        $response = new Response();
        
        $response->setContent(json_encode($covoiturage));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }










    public function GetPossedeUtilisateurAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Possede i WHERE i.idUtilisateur ='.$id.'ORDER BY i.immatriculation ASC'
            );
        $possede = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //USER PART :

        //Possede user base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur  WHERE i.idUtilisateur ='.$id.' ORDER BY i.immatriculation ASC'
            );

        $user = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $possede[$i]['utilisateur_possede'] = $value;
            $i ++;
        }

        //Possede user ville
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille  WHERE i.idUtilisateur ='.$id.' ORDER BY i.immatriculation ASC'
            );

        $user = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $possede[$i]['utilisateur_possede']['ville_utilisateur'] = $value;
            $i ++;
        }

        //Possede user categorie
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Categorie AS k WITH k.id = j.idCategorie WHERE i.idUtilisateur ='.$id.' ORDER BY i.immatriculation ASC'
            );

        $user = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $possede[$i]['utilisateur_possede']['categorie_utilisateur'] = $value;
            $i ++;
        }

        // VOITURE PART :

        //Possede voiture base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture   WHERE i.idUtilisateur ='.$id.' ORDER BY i.immatriculation ASC'
            );

        $voiture = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($voiture as $value){
            $possede[$i]['voiture_possede'] = $value;
            $i ++;
        }

        //Possede voiture Marque
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:Marque AS k WITH k.id = j.idMarque  WHERE i.idUtilisateur ='.$id.' ORDER BY i.immatriculation ASC'
            );

        $voiture = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($voiture as $value){
            $possede[$i]['voiture_possede']['marque_voiture'] = $value;
            $i ++;
        }

        //Possede voiture type Vehicule
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Possede i JOIN BackOfficeBundle:Voiture AS j WITH j.id = i.idVoiture JOIN BackOfficeBundle:TypeVehicule AS k WITH k.id = j.idTypeVehicule WHERE i.idUtilisateur ='.$id.'  ORDER BY i.immatriculation ASC'
            );

        $voiture = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($voiture as $value){
            $possede[$i]['voiture_possede']['type_vehicule_voiture'] = $value;
            $i ++;
        }

        $response = new Response();
        
        $response->setContent(json_encode($possede));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }








    public function GetCovoiturageUtilisateurAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Covoiturage i WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );
        $covoiturage = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        //Covoiturage type covoit
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:TypeCovoit AS j WITH j.id = i.idTypeCovoit WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $covoit = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($covoit as $value){
            $covoiturage[$i]['type_covoit_covoiturage'] = $value;
            $i ++;
        }

        //covoiturage CO2
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Co2 AS j WITH j.id = i.idCo2 WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $co2 = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($co2 as $value){
            $covoiturage[$i]['co2_covoiturage'] = $value;
            $i ++;
        }


        //USER PART :

        //Covoiturage user base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $user = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $covoiturage[$i]['utilisateur_covoiturage'] = $value;
            $i ++;
        }

        //covoiturage user ville
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $user = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $covoiturage[$i]['utilisateur_covoiturage']['ville_utilisateur'] = $value;
            $i ++;
        }
        //covoiturage user categorie
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Utilisateur AS j WITH j.id = i.idUtilisateur JOIN BackOfficeBundle:Categorie AS k WITH k.id = j.idCategorie WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $user = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($user as $value){
            $covoiturage[$i]['utilisateur_covoiturage']['categorie_utilisateur'] = $value;
            $i ++;
        }


        //TRAJET PART :

        //Covoiturage trajet base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT j FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage'] = $value;
            $i ++;
        }

        //Covoiturage Trajet Ville Depart
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVille WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['ville_depart_trajet'] = $value;
            $i ++;
        }
        //Covoiturage Trajet Ville Arriver
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Ville AS k WITH k.id = j.idVilleVilleArrivee WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['ville_arrivee_trajet'] = $value;
            $i ++;
        }

        //Covoiturage Trajet type_trajet
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:TypeTrajet AS k WITH k.id = j.idTypeTrajet WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['type_trajet_trajet'] = $value;
            $i ++;
        }


        //TRAJET POSSEDE PARTIE

        //trajet possede base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT k FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet'] = $value;
            $i ++;
        }


        //TRAJET POSSEDE USER PART

        //trajet possede user base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['utilisateur_possede'] = $value;
            $i ++;
        }

        //trajet possede user ville
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur JOIN BackOfficeBundle:Ville AS m WITH m.id = l.idVille WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['utilisateur_possede']['ville_utilisateur'] = $value;
            $i ++;
        }

        //trajet possede user categorie
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Utilisateur AS l WITH l.id = k.idUtilisateur JOIN BackOfficeBundle:Categorie AS m WITH m.id = l.idCategorie WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['utilisateur_possede']['categorie_utilisateur'] = $value;
            $i ++;
        }
        
        //TRAJET POSSEDE VOITURE PART

        //trajet possede voiture base
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT l FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['voiture_possede'] = $value;
            $i ++;
        }

        //trajet possede voiture marque
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture JOIN BackOfficeBundle:Marque AS m WITH m.id = l.idMarque WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['voiture_possede']['marque_voiture'] = $value;
            $i ++;
        }

        //trajet possede voiture type vehicule
        $em = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT m FROM BackOfficeBundle:Covoiturage i JOIN BackOfficeBundle:Trajet AS j WITH j.id = i.idTrajet JOIN BackOfficeBundle:Possede AS k WITH k.id = j.idPossede JOIN BackOfficeBundle:Voiture AS l WITH l.id = k.idVoiture JOIN BackOfficeBundle:TypeVehicule AS m WITH m.id = l.idTypeVehicule WHERE i.idUtilisateur ='.$id.' ORDER BY i.created ASC'
            );

        $trajet = $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        $i = 0;
        foreach ($trajet as $value){
            $covoiturage[$i]['trajet_covoiturage']['possede_trajet']['voiture_possede']['type_vehicule_voiture'] = $value;
            $i ++;
        }

        $response = new Response();
        
        $response->setContent(json_encode($covoiturage));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}

