<?php
namespace App\Repository;

use App\Entity\FatMassType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FatMassType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FatMassType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FatMassType[]    findAll()
 * @method FatMassType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FatMassTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FatMassType::class);
    }

    // ... altri metodi personalizzati ...
}
