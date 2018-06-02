<?php

namespace App\Repository;

use App\Entity\Fuck;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fuck|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fuck|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fuck[]    findAll()
 * @method Fuck[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FuckRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fuck::class);
    }

//    /**
//     * @return Fuck[] Returns an array of Fuck objects
//     */
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
    public function findOneBySomeField($value): ?Fuck
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
