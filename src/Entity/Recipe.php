<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $foodWeight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $recipeDescription;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $recipeName;

    // ... metodi getter e setter ...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoodWeight(): ?string
    {
        return $this->foodWeight;
    }

    public function setFoodWeight(?string $foodWeight): self
    {
        $this->foodWeight = $foodWeight;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    
}
