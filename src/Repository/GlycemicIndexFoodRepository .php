<?php
namespace App\Repository;

use App\Entity\GlycemicIndexFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class GlycemicIndexFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GlycemicIndexFood::class);
    }

    // ... metodi per le query personalizzate ...
}
