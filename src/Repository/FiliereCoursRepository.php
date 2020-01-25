<?php

namespace App\Repository;

use App\Entity\FiliereCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FiliereCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method FiliereCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method FiliereCours[]    findAll()
 * @method FiliereCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FiliereCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FiliereCours::class);
    }

    // /**
    //  * @return FiliereCours[] Returns an array of FiliereCours objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FiliereCours
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
