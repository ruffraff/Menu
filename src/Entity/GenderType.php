<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GenderTypeRepository")
 */
class GenderType
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $genderName;

    // ... metodi getter e setter ...
    public function getGenderName(): ?string
    {
        return $this->genderName;
    }

    public function setGenderName(?string $genderName): self
    {
        $this->genderName = $genderName;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
    
}
