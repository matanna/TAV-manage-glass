<?php

namespace App\Repository;

use App\Entity\Chute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chute|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chute|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chute[]    findAll()
 * @method Chute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChuteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chute::class);
    }

    /**
     * @return Chute[] Returns an array of Chute objects
     */
    public function findAllByOrder()
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.matiere', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Chute
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
