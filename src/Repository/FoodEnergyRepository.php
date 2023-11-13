<?php
namespace App\Repository;

use App\Entity\FoodEnergy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FoodEnergyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodEnergy::class);
    }

    // ... metodi per le query personalizzate ...
}
