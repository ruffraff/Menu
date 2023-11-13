<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MealRepository")
 */
class Meal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $meal_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $meal_number;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $time;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $profile_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $day_number;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $food_weight;

    // ... metodi getter e setter ...

    public function getMealId(): ?int
    {
        return $this->meal_id;
    }

    public function getMealNumber(): ?int
    {
        return $this->meal_number;
    }

    public function setMealNumber(?int $meal_number): self
    {
        $this->meal_number = $meal_number;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(?string $time): self
    {
        $this->time = $time;

        return $this;
    }

    

    


}
