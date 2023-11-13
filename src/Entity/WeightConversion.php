<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeightConversionRepository")
 */
class WeightConversion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bodyType;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ageGroup;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fatMassType;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $proteinValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $proteinRange;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $carbohydratesValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $carbohydratesRange;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fiberValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fiberRange;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
    */
    private $lipidsValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $lipidsRange;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $starchValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $starchRange;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $waterValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $waterRange;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $solubleSugarsValue;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $solubleSugarsRange;

    // tutti metodi getter e setter dei campi della tabella
    // ... altri metodi getter e setter ...
    public function getId(): ?int
    {
        return $this->id;
    }

    



    

    

}
