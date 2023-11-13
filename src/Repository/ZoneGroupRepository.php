<?php
namespace App\Repository;

use App\Entity\ZoneGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ZoneGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZoneGroup::class);
    }

    // ... metodi per le query personalizzate ...
}
