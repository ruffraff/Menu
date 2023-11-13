<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BodyTypeRepository")
 */
class BodyType
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $bodyTypeName;

    // ... metodi getter e setter ...
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
    
    
    public function getBodyTypeName(): ?string
    {
        return $this->bodyTypeName;
    }

    public function setBodyTypeName(?string $bodyTypeName): self
    {
        $this->bodyTypeName = $bodyTypeName;

        return $this;
    }

    
}
