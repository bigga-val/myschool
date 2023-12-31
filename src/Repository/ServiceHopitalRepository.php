<?php

namespace App\Repository;

use App\Entity\ServiceHopital;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServiceHopital|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceHopital|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceHopital[]    findAll()
 * @method ServiceHopital[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceHopitalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceHopital::class);
    }

    // /**
    //  * @return ServiceHopital[] Returns an array of ServiceHopital objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ServiceHopital
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
