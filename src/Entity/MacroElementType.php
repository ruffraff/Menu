namespace App\Entity;
<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MacroElementTypeRepository")
 */
class MacroElementType
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
    private $nameMacroElementType;

    // ... altri metodi getter e setter ...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameMacroElementType(): ?string
    {
        return $this->nameMacroElementType;
    }

    public function setNameMacroElementType(?string $nameMacroElementType): self
    {
        $this->nameMacroElementType = $nameMacroElementType;

        return $this;
    }

    
}
