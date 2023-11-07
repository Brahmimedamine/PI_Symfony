<?php

namespace App\Entity;

use App\Repository\BadgeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BadgeRepository::class)]
class Badge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 2000)]
    private ?string $commantaire = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $datebadge = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $typebadge = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "iduser", referencedColumnName: "iduser")]
    private ?User $iduser = null;

    #[ORM\ManyToOne(targetEntity: Restaurant::class)]
    #[ORM\JoinColumn(name: "id_restau", referencedColumnName: "id_restau")]
    private ?Restaurant $idRestau = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommantaire(): ?string
    {
        return $this->commantaire;
    }

    public function setCommantaire(string $commantaire): static
    {
        $this->commantaire = $commantaire;

        return $this;
    }

    public function getDatebadge(): ?\DateTimeInterface
    {
        return $this->datebadge;
    }

    public function setDatebadge(\DateTimeInterface $datebadge): static
    {
        $this->datebadge = $datebadge;

        return $this;
    }

    public function getTypebadge(): ?string
    {
        return $this->typebadge;
    }

    public function setTypebadge(string $typebadge): static
    {
        $this->typebadge = $typebadge;

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
