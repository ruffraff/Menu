<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GlycemicIndexFoodRepository")
 */
class GlycemicIndexFood
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $glycemic_index_food_id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $glycemic_index_food_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $glycemic_index_value;

    // ... metodi getter e setter ...

    public function getGlycemicIndexFoodId(): ?int
    {
        return $this->glycemic_index_food_id;
    }

    public function getGlycemicIndexFoodName(): ?string
    {
        return $this->glycemic_index_food_name;
    }

    public function setGlycemicIndexFoodName(?string $glycemic_index_food_name): self
    {
        $this->glycemic_index_food_name = $glycemic_index_food_name;

        return $this;
    }

    public function getGlycemicIndexValue(): ?int
    {
        return $this->glycemic_index_value;
    }

    public function setGlycemicIndexValue(?int $glycemic_index_value): self
    {
        $this->glycemic_index_value = $glycemic_index_value;

        return $this;
    }

    

}
