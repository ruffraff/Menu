<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodEnergyRepository")
 */
class FoodEnergy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $food_id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $energy_kilocalories;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $energy_kilojoules;

    // ... metodi getter e setter ...

    public function getFoodId(): ?int
    {
        return $this->food_id;
    }

    public function getEnergyKilocalories(): ?string
    {
        return $this->energy_kilocalories;
    }

    public function setEnergyKilocalories(?string $energy_kilocalories): self
    {
        $this->energy_kilocalories = $energy_kilocalories;

        return $this;
    }

    public function getEnergyKilojoules(): ?string
    {
        return $this->energy_kilojoules;
    }

    public function setEnergyKilojoules(?string $energy_kilojoules): self
    {
        $this->energy_kilojoules = $energy_kilojoules;

        return $this;
    }

    
}
