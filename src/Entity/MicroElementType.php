namespace App\Entity;
<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MicroElementTypeRepository")
 */
class MicroElementType
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
    private $nameMicroElementType;

    // ... altri metodi getter e setter ...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameMicroElementType(): ?string
    {
        return $this->nameMicroElementType;
    }

    public function setNameMicroElementType(?string $nameMicroElementType): self
    {
        $this->nameMicroElementType = $nameMicroElementType;

        return $this;
    }

    
}
