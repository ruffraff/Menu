<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgeGroupRepository")
 */
class ZoneGroup
{
   /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $groupName;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $proteinValue;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $proteinRange;

//getter e setter

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getProteinValue(): ?string
    {
        return $this->proteinValue;
    }

    public function setProteinValue(?string $proteinValue): self
    {
        $this->proteinValue = $proteinValue;

        return $this;
    }

    public function getProteinRange(): ?string
    {
        return $this->proteinRange;
    }

    public function setProteinRange(?string $proteinRange): self
    {
        $this->proteinRange = $proteinRange;

        return $this;
    }   
    

}
