<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportTypeRepository")
 */
class SportType
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $sportName;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $consumption;

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

    public function getSportName(): ?string
    {
        return $this->sportName;
    }

    public function setSportName(?string $sportName): self
    {
        $this->sportName = $sportName;

        return $this;
    }

    public function getConsumption(): ?string
    {
        return $this->consumption;
    }

    public function setConsumption(?string $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }

    
}
