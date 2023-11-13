<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MicroElementRepository")
 */
class MicroElement
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
    private $sodium;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $potassium;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $iron;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $calcium;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $phosphorus;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $thiamine;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $riboflavin;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $niacin;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $vitamin_a;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $vitamin_c;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $vitamin_e;

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
 
     public function getSodium(): ?string
     {
         return $this->sodium;
     }
 
     public function setSodium(?string $sodium): self
     {
         $this->sodium = $sodium;
 
         return $this;
     }
 
     public function getPotassium(): ?string
     {
         return $this->potassium;
     }
 
     public function setPotassium(?string $potassium): self
     {
         $this->potassium = $potassium;
 
         return $this;
     }
 
     public function getIron(): ?string
     {
         return $this->iron;
     }
 
     public function setIron(?string $iron): self
     {
         $this->iron = $iron;
 
         return $this;
     }
 
     public function getCalcium(): ?string
     {
         return $this->calcium;
     }
 
     public function setCalcium(?string $calcium): self
     {
         $this->calcium = $calcium;
 
         return $this;
     }
 
     public function getPhosphorus(): ?string
     {
         return $this->phosphorus;
     }
 
     public function setPhosphorus(?string $phosphorus): self
     {
         $this->phosphorus = $phosphorus;
 
         return $this;
     }
 
     public function getThiamine(): ?string
     {
         return $this->thiamine;
     }
 
     public function setThiamine(?string $thiamine): self
     {
         $this->thiamine = $thiamine;
 
         return $this;
     }
 
     public function getRiboflavin(): ?string
     {
         return $this->riboflavin;
     }
 
     public function setRiboflavin(?string $riboflavin): self
     {
         $this->riboflavin = $riboflavin;
 
         return $this;
     }
 
     public function getNiacin(): ?string
     {
         return $this->niacin;
     }
 
     public function setNiacin(?string $niacin): self
     {
         $this->niacin = $niacin;
 
         return $this;
     }
 
     public function getVitaminA(): ?string
     {
         return $this->vitamin_a;
     }
 
     public function setVitaminA(?string $vitamin_a): self
     {
         $this->vitamin_a = $vitamin_a;
 
         return $this;
     }
 
     public function getVitaminC(): ?string
     {
         return $this->vitamin_c;
     }
 
     public function setVitaminC(?string $vitamin_c): self
     {
         $this->vitamin_c = $vitamin_c;
 
         return $this;
     }
 
     public function getVitaminE(): ?string
     {
         return $this->vitamin_e;
     }
 
     public function setVitaminE(?string $vitamin_e): self
     {
         $this->vitamin_e = $vitamin_e;
 
         return $this;
     }
 
     // ... altri metodi ...
}
