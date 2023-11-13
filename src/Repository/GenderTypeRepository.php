<?php
namespace App\Repository;

use App\Entity\GenderType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GenderType|null find($id, $lockMode = null, $lockVersion = null)
 * @method GenderType|null findOneBy(array $criteria, array $orderBy = null)
 * @method GenderType[]    findAll()
 * @method GenderType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenderTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GenderType::class);
    }
}
