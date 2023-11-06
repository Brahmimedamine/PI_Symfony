<?php

namespace App\Entity;

use App\Repository\ExpertiseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpertiseRepository::class)]
class Expertise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $ididee;

    #[ORM\Column(type: "integer")]
    private $reponseavis;

    #[ORM\Column(type: "integer")]
    private $dateidee;

    #[ORM\Column(type: "integer")]
    private $titreidee;

    #[ORM\Column(type: "string", length: 2000)]
    private $pubidee;

    public function getIdidee(): ?int
    {
        return $this->ididee;
    }

    public function getReponseavis(): ?int
    {
        return $this->reponseavis;
    }

    public function setReponseavis(int $reponseavis): static
    {
        $this->reponseavis = $reponseavis;
        return $this;
    }

    public function getDateidee(): ?int
    {
        return $this->dateidee;
    }

    public function setDateidee(int $dateidee): static
    {
        $this->dateidee = $dateidee;
        return $this;
    }

    public function getTitreidee(): ?int
    {
        return $this->titreidee;
    }

    public function setTitreidee(int $titreidee): static
    {
        $this->titreidee = $titreidee;
        return $this;
    }

    public function getPubidee(): ?string
    {
        return $this->pubidee;
    }

    public function setPubidee(string $pubidee): static
    {
        $this->pubidee = $pubidee;
        return $this;
    }
}
