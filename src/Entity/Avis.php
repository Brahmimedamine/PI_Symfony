<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 2000)]
    private ?string $pubavis = null;

    #[ORM\Column(type: "string", length: 30)]
    private ?string $titreavis = null;

    #[ORM\Column(type: "string", length: 20)]
    private ?string $dateavis = null;

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

    public function getPubavis(): ?string
    {
        return $this->pubavis;
    }

    public function setPubavis(string $pubavis): static
    {
        $this->pubavis = $pubavis;

        return $this;
    }

    public function getTitreavis(): ?string
    {
        return $this->titreavis;
    }

    public function setTitreavis(string $titreavis): static
    {
        $this->titreavis = $titreavis;

        return $this;
    }

    public function getDateavis(): ?string
    {
        return $this->dateavis;
    }

    public function setDateavis(string $dateavis): static
    {
        $this->dateavis = $dateavis;

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
