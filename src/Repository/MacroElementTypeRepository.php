<?php
namespace App\Repository;

use App\Entity\MacroElementType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MacroElementType|null find($id, $lockMode = null, $lockVersion = null)
 * @method MacroElementType|null findOneBy(array $criteria, array $orderBy = null)
 * @method MacroElementType[]    findAll()
 * @method MacroElementType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MacroElementTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MacroElementType::class);
    }

    // ... altri metodi personalizzati ...
}
