<?php

namespace App\Repository;

use App\Entity\MacroElement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MacroElementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MacroElement::class);
    }

    // ... metodi per le query personalizzate ...
}