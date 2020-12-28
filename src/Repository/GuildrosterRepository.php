<?php

namespace App\Repository;

use App\Entity\Guildroster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Guildroster|null find($id, $lockMode = null, $lockVersion = null)
 * @method Guildroster|null findOneBy(array $criteria, array $orderBy = null)
 * @method Guildroster[]    findAll()
 * @method Guildroster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuildrosterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Guildroster::class);
    }

    // /**
    //  * @return Guildroster[] Returns an array of Guildroster objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Guildroster
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
