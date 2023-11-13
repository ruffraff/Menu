<?php
namespace App\Repository;

use App\Entity\WeightConversion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class WeightConversionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeightConversion::class);
    }

    // ... metodi per le query personalizzate ...
}
