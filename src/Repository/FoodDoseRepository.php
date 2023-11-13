<?php
namespace App\Repository;

use App\Entity\FoodDose;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FoodDoseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodDose::class);
    }

    // ... metodi per le query personalizzate ...
}
