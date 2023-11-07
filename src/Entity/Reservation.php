<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idRes;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $datereser;

    #[ORM\Column(type: "time")]
    private \DateTimeInterface $timereser;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "iduser", referencedColumnName: "iduser")]
    private ?User $iduser = null;

    #[ORM\ManyToOne(targetEntity: Restaurant::class)]
    #[ORM\JoinColumn(name: "id_restau", referencedColumnName: "id_restau")]
    private ?Restaurant $idRestau;

    public function getIdRes(): int
    {
        return $this->idRes;
    }

    public function getDatereser(): \DateTimeInterface
    {
        return $this->datereser;
    }

    public function setDatereser(\DateTimeInterface $datereser): static
    {
        $this->datereser = $datereser;
        return $this;
    }

    public function getTimereser(): \DateTimeInterface
    {
        return $this->timereser;
    }

    public function setTimereser(\DateTimeInterface $timereser): static
    {
        $this->timereser = $timereser;
        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): static
    {
        $this->idUser = $idUser;
        return $this;
    }

    public function getIdRestau(): ?Restaurant
    {
        return $this->idRestau;
    }

    public function setIdRestau(?Restaurant $idRestau): static
    {
        $this->idRestau = $idRestau;
        return $this;
    }
}
