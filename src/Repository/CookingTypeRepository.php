<?php
namespace App\Repository;

use App\Entity\CookingType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CookingTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CookingType::class);
    }

    // ... metodi per le query personalizzate ...
}
