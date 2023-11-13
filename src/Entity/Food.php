<?php

namespace App\Entity;
use App\Repository\FoodRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MealRepository")
 */
class Food
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodType")
     */
    private $food_type;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $food_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $counter_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $portion;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\MacroElement", inversedBy="food")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $macroElement;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\MicroElement", inversedBy="food")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $microElement;

    // ... metodi getter e setter ...
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoodType(): ?FoodType
    {
        return $this->food_type;
    }

    public function setFoodType(FoodType $food_type): self
    {
        $this->food_type = $food_type;

        return $this;
    }

    public function getFoodName(): ?string
    {
        return $this->food_name;
    }

    public function setFoodName(?string $food_name): self
    {
        $this->food_name = $food_name;

        return $this;
    }

    public function getCounterId(): ?int
    {
        return $this->counter_id;
    }

    public function setCounterId(?int $counter_id): self
    {
        $this->counter_id = $counter_id;

        return $this;
    }

    public function getPortion(): ?int
    {
        return $this->portion;
    }

    public function setPortion(?int $portion): self
    {
        $this->portion = $portion;

        return $this;
    }

    public function getMacroElement(): ?MacroElement
    {
        return $this->macroElement;
    }

    public function setMacroElement(?MacroElement $macroElement): self
    {
        $this->macroElement = $macroElement;

        return $this;
    }

    public function getMicroElement(): ?MicroElement
    {
        return $this->microElement;
    }

    public function setMicroElement(?MicroElement $microElement): self
    {
        $this->microElement = $microElement;

        return $this;
    }
}