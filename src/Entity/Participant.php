<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipantRepository::class)]
class Participant
{
    #[ORM\Column(type: "date")]
    private \DateTime $datepar;

    #[ORM\Column(type: "integer")]
    private int $numero;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idparticipant;

    #[ORM\ManyToOne(targetEntity: Evennement::class)]

    #[ORM\ManyToOne(targetEntity: Badge::class)]
    #[ORM\JoinColumn(name: "idevent", referencedColumnName: "idevent")]
    private Evennement $idevent;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "iduser", referencedColumnName: "iduser")]
    private ?User $iduser = null;

    public function getDatepar(): \DateTimeInterface
    {
        return $this->datepar;
    }

    public function setDatepar(\DateTimeInterface $datepar): static
    {
        $this->datepar = $datepar;
        return $this;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;
        return $this;
    }

    public function getIdparticipant(): int
    {
        return $this->idparticipant;
    }

    public function getIdevent(): Evennement
    {
        return $this->idevent;
    }

    public function setIdevent(Evennement $idevent): static
    {
        $this->idevent = $idevent;
        return $this;
    }

    public function getIduser(): User
    {
        return $this->iduser;
    }

    public function setIduser(User $iduser): static
    {
        $this->iduser = $iduser;
        return $this;
    }
}
