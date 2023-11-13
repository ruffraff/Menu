<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MealRecipeRepository")
 */
class MealRecipe
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $meal_id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $recipe_id;

    // ... metodi getter e setter ...
    public function getMealId(): ?int
    {
        return $this->meal_id;
    }

    public function setMealId(?int $meal_id): self
    {
        $this->meal_id = $meal_id;

        return $this;
    }


    public function getRecipeId(): ?int
    {
        return $this->recipe_id;
    }   

    public function setRecipeId(?int $recipe_id): self
    {
        $this->recipe_id = $recipe_id;

        return $this;
    }

    
}
