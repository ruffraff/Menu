<?php
namespace App\Repository;

use App\Entity\MealRecipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MealRecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MealRecipe::class);
    }

    // ... metodi per le query personalizzate ...
}
