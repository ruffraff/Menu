<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CookingTypeRepository")
 */
class CookingType
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pageTypeId;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $cookingName;

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

    public function getPageTypeId(): ?int
    {
        return $this->pageTypeId;
    }

    public function setPageTypeId(?int $pageTypeId): self
    {
        $this->pageTypeId = $pageTypeId;

        return $this;
    }

    public function getCookingName(): ?string
    {
        return $this->cookingName;
    }


    public function setCookingName(?string $cookingName): self
    {
        $this->cookingName = $cookingName;

        return $this;
    }
    
}
