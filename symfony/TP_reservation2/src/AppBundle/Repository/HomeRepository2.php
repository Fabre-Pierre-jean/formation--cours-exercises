<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * HomeRepository2
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HomeRepository2 extends \Doctrine\ORM\EntityRepository
{
    public function AllOrderedByNameAsc()
    {
        //SELECT nom FROM Auteur a ORDER BY a.nom ASC
//$qb =$this->createQueryBuilder('a')
//    ->orderBy('a.nom', 'ASC')
//    ->getQuery();
//var_dump($qb);die;

        return $this->createQueryBuilder('a')
            ->orderBy('a.day', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
