<?php

namespace App\Repository;

use App\Entity\MicroElement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MicroElementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MicroElement::class);
    }

    // ... metodi per le query personalizzate ...
}
