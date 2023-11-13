<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScheduleRepository")
 */
class Schedule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $schedule_id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $schedule_description;

    // ... metodi getter e setter ...

    public function getScheduleId(): ?int
    {
        return $this->schedule_id;
    }

    public function setScheduleId(?int $schedule_id): self
    {
        $this->schedule_id = $schedule_id;

        return $this;
    }

    public function getScheduleDescription(): ?string
    {
        return $this->schedule_description;
    }

    public function setScheduleDescription(?string $schedule_description): self
    {
        $this->schedule_description = $schedule_description;

        return $this;
    }

    
}
