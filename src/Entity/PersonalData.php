<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use App\Entity\BodyType;
use App\Entity\AgeGroup;
use App\Entity\GenderType;
use App\Entity\SportType;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\LegacyPasswordAuthenticatedUserInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonalDataRepository")
 */
class PersonalData implements UserInterface, PasswordAuthenticatedUserInterface,LegacyPasswordAuthenticatedUserInterface
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
    private $name;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $surname;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $height;

    /**
     * @ORM\ManyToOne(targetEntity=BodyType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $bodyType;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $insertDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $confirmed;

    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $workoutsPerWeek;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $workoutDuration;


    /**
     * @ORM\ManyToOne(targetEntity=AgeGroup::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ageGroup;

    /**
     * @ORM\ManyToOne(targetEntity=GenderType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity=SportType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sportType;

    // ... metodi getter e setter ...
    // ... previous code ...

    // Getter and Setter methods

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

   // Getter and setter methods
    public function getBodyType(): ?BodyType
    {
        return $this->bodyType;
    }

    public function setBodyType(?BodyType $bodyType): self
    {
        $this->bodyType = $bodyType;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getInsertDate(): ?\DateTimeInterface
    {
        return $this->insertDate;
    }

    public function setInsertDate(?\DateTimeInterface $insertDate): self
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    public function getConfirmed(): ?int
    {
        return $this->confirmed;
    }

    public function setConfirmed(?int $confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }

   // Getter and setter methods for AgeGroup
    public function getAgeGroup(): ?AgeGroup
    {
        return $this->ageGroup;
    }

    public function setAgeGroup(?AgeGroup $ageGroup): self
    {
        $this->ageGroup = $ageGroup;
        return $this;
    }

    // Getter and setter methods for GenderType
    public function getGender(): ?GenderType
    {
        return $this->gender;
    }

    public function setGender(?GenderType $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    // Getter and setter methods for SportType
    public function getSportType(): ?SportType
    {
        return $this->sportType;
    }

    public function setSportType(?SportType $sportType): self
    {
        $this->sportType = $sportType;
        return $this;
    }
    public function getWorkoutsPerWeek(): ?int
    {
        return $this->workoutsPerWeek;
    }

    public function setWorkoutsPerWeek(?int $workoutsPerWeek): self
    {
        $this->workoutsPerWeek = $workoutsPerWeek;

        return $this;
    }

    public function getWorkoutDuration(): ?int
    {
        return $this->workoutDuration;
    }

    public function setWorkoutDuration(?int $workoutDuration): self
    {
        $this->workoutDuration = $workoutDuration;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    public function getRoles(): array
    {
        // You may customize this method to return appropriate roles for the user.
        // For example, you may store roles in the database and return them here.
        return ['ROLE_USER'];
    }

    public function getSalt(): ?string
    {
        return 'raffruff';
        // The bcrypt and argon2i/hashers don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
       // return null;
    }

    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user,
        // clear it here.
    }

   
}
