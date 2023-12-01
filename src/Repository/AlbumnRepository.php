<?php

namespace App\Repository;

use App\Entity\Albumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Albumn>
 *
 * @method Albumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method Albumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method Albumn[]    findAll()
 * @method Albumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlbumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Albumn::class);
    }

//    /**
//     * @return Albumn[] Returns an array of Albumn objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Albumn
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
