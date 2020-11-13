<?php

namespace App\Repository;

use App\Entity\Arti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Arti|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arti|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arti[]    findAll()
 * @method Arti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Arti::class);
    }

    // /**
    //  * @return Arti[] Returns an array of Arti objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Arti
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
