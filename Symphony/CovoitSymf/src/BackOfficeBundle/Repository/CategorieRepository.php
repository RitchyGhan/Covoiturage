<?php

namespace BackOfficeBundle\Repository;

class CategorieRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByCategorieOrderedRest()
    {
        $em = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Categorie i ORDER BY i.nom ASC'
            );
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }

    public function findOneByIdRest($id)
    {
        $em = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM BackOfficeBundle:Categorie i WHERE i.id ='.$id
            );
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
}
