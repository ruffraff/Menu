<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodDoseRepository")
 */
class FoodDose
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age_range_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gender_id;

    //get e set di $gender_id

    public function getGenderId():?int
    {
        return $this->gender_id;
    }

    public function setGenderId(?int $gender_id): self
    {
        $this->gender_id = $gender_id;

        return $this;
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }   

    public function getAgeRangeId(): ?int
    {
        return $this->age_range_id;
    }

    public function setAgeRangeId(?int $age_range_id): self
    {
        $this->age_range_id = $age_range_id;

        return $this;
    }

    


}

