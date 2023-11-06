<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idrep;

    #[ORM\Column(type: "string", length: 20)]
    private string $contenue;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $daterep;

    #[ORM\ManyToOne(targetEntity: Reclamation::class)]
    #[ORM\JoinColumns({
        #[ORM\JoinColumn(name: "idrec", referencedColumnName: "idrec")]
    })]
    private ?Reclamation $idrec;

    public function getIdrep(): int
    {
        return $this->idrep;
    }

    public function getContenue(): string
    {
        return $this->contenue;
    }

    public function setContenue(string $contenue): static
    {
        $this->contenue = $contenue;
        return $this;
    }

    public function getDaterep(): \DateTimeInterface
    {
        return $this->daterep;
    }

    public function setDaterep(\DateTimeInterface $daterep): static
    {
        $this->daterep = $daterep;
        return $this;
    }

    public function getIdrec(): ?Reclamation
    {
        return $this->idrec;
    }

    public function setIdrec(?Reclamation $idrec): static
    {
        $this->idrec = $idrec;
        return $this;
    }
}
