<?php

namespace App\Repository;

use App\Entity\Food;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Food::class);
    }
    
   
    
    public function findFoodsWithMacroAndMicroElement(?int $foodTypeId = null, ?string $search = null)
    {
        $qb = $this->createQueryBuilder('f');
        if ($foodTypeId) {
            $qb->andWhere('f.food_type = :foodTypeId')
            ->setParameter('foodTypeId', $foodTypeId);
        }
        if ($search) {
            $qb->andWhere('f.food_name LIKE :search')
            ->setParameter('search', '%' . $search . '%');
        }
        $foods = $qb->getQuery()->getResult(); 
        foreach ($foods as $food) {
            $macroElement = $food->getMacroElement();
            $microElement = $food->getMicroElement();
        }
        return $foods;
    }

}
