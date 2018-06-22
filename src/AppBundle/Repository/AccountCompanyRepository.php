<?php
/**
 * Created by PhpStorm.
 * User: serhiikashuba
 * Date: 18.06.18
 * Time: 16:01
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class AccountCompanyRepository extends EntityRepository
{
    public function findAllTitleMatchingQuery($query)
    {
        return $this->createQueryBuilder('company')
            ->andWhere('company.title LIKE :query')
            ->setParameter('query', '%'.$query.'%')
            ->getQuery()
            ->getResult();
    }
}