<?php
namespace App\Repository;

use App\Entity\FoodType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FoodTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodType::class);
    }

    // ... metodi per le query personalizzate ...
}
