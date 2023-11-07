<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idrec;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date;

    #[ORM\Column(type: "string", length: 20)]
    private string $description;

    #[ORM\Column(type: "string", length: 0)]
    private string $typerec;

    #[ORM\Column(type: "string", length: 0)]
    private string $etatrec;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "iduser", referencedColumnName: "iduser")]
    private ?User $iduser = null;

    public function getIdrec(): int
    {
        return $this->idrec;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getTyperec(): string
    {
        return $this->typerec;
    }

    public function setTyperec(string $typerec): static
    {
        $this->typerec = $typerec;
        return $this;
    }

    public function getEtatrec(): string
    {
        return $this->etatrec;
    }

    public function setEtatrec(string $etatrec): static
    {
        $this->etatrec = $etatrec;
        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;
        return $this;
    }
}
