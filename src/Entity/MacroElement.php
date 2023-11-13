<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MacroElementRepository")
 */
class MacroElement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $edible_part;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $water;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $protein;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $lipids;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $carbohydrates;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $starch;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $soluble_sugars;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fiber;

     
        /**
         * @ORM\OneToOne(targetEntity="App\Entity\Food")
         * @ORM\JoinColumn(name="id", referencedColumnName="id")
         */
        private $food;

        public function getFood(): ?Food
        {
            return $this->food;
        }

        public function setFood(?Food $food): self
        {
            $this->food = $food;

            return $this;
        }


      public function getId(): ?int
      {
          return $this->id;
      }
  
      public function getEdiblePart(): ?string
      {
          return $this->edible_part;
      }
  
      public function setEdiblePart(?string $edible_part): self
      {
          $this->edible_part = $edible_part;
  
          return $this;
      }
  
      public function getWater(): ?string
      {
          return $this->water;
      }
  
      public function setWater(?string $water): self
      {
          $this->water = $water;
  
          return $this;
      }
  
      public function getProtein(): ?string
      {
          return $this->protein;
      }
  
      public function setProtein(?string $protein): self
      {
          $this->protein = $protein;
  
          return $this;
      }
  
      public function getLipids(): ?string
      {
          return $this->lipids;
      }
  
      public function setLipids(?string $lipids): self
      {
          $this->lipids = $lipids;
  
          return $this;
      }
  
      public function getCarbohydrates(): ?string
      {
          return $this->carbohydrates;
      }
  
      public function setCarbohydrates(?string $carbohydrates): self
      {
          $this->carbohydrates = $carbohydrates;
  
          return $this;
      }
  
      public function getStarch(): ?string
      {
          return $this->starch;
      }
  
      public function setStarch(?string $starch): self
      {
          $this->starch = $starch;
  
          return $this;
      }
  
      public function getSolubleSugars(): ?string
      {
          return $this->soluble_sugars;
      }
  
      public function setSolubleSugars(?string $soluble_sugars): self
      {
          $this->soluble_sugars = $soluble_sugars;
  
          return $this;
      }
  
      public function getFiber(): ?string
      {
          return $this->fiber;
      }
  
      public function setFiber(?string $fiber): self
      {
          $this->fiber = $fiber;
  
          return $this;
      }
  
}