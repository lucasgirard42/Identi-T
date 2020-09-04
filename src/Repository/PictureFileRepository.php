<?php

namespace App\Repository;

use App\Entity\PictureFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PictureFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictureFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictureFile[]    findAll()
 * @method PictureFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictureFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictureFile::class);
    }

    // /**
    //  * @return PictureFile[] Returns an array of PictureFile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PictureFile
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
