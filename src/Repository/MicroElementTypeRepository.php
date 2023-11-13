<?php
namespace App\Repository;

use App\Entity\MicroElementType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MicroElementType|null find($id, $lockMode = null, $lockVersion = null)
 * @method MicroElementType|null findOneBy(array $criteria, array $orderBy = null)
 * @method MicroElementType[]    findAll()
 * @method MicroElementType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MicroElementTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MicroElementType::class);
    }

    // ... altri metodi personalizzati ...
}
