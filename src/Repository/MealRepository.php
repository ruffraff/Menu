<?php
namespace App\Repository;

use App\Entity\Meal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MealRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Meal::class);
    }

    // ... metodi per le query personalizzate ...
}
