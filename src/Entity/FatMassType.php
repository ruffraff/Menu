<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FatMassTypeRepository")
 */
class FatMassType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $percFatMass;

    // ... altri metodi getter e setter ...
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPercFatMass(): ?string
    {
        return $this->percFatMass;
    }

    public function setPercFatMass(?string $percFatMass): self
    {
        $this->percFatMass = $percFatMass;

        return $this;
    }

    
}
