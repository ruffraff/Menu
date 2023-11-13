<?php
namespace App\Repository;

use App\Entity\AgeGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AgeGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgeGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgeGroup[]    findAll()
 * @method AgeGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgeGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgeGroup::class);
    }

    // Additional methods can be added as needed
}