<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodTypeRepository")
 */
class FoodType
{
   /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $foodTypeName;

    // ... metodi getter e setter ...
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFoodTypeName(): ?string
    {
        return $this->foodTypeName;
    }

    public function setFoodTypeName(?string $foodTypeName): self
    {
        $this->foodTypeName = $foodTypeName;

        return $this;
    }
}
