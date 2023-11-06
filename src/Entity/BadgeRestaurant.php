<?php

namespace App\Entity;

use App\Repository\BadgeRestaurantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BadgeRestaurantRepository::class)]
class BadgeRestaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Restaurant::class)]
    #[ORM\JoinColumns({
        #[ORM\JoinColumn(name: "id_restau", referencedColumnName: "id_restau")]
    })]
    private ?Restaurant $idRestau;

    #[ORM\ManyToOne(targetEntity: Badge::class)]
    #[ORM\JoinColumns({
        #[ORM\JoinColumn(name: "idbadge", referencedColumnName: "id")]
    })]
    private ?Badge $idbadge;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdbadge(): ?Badge
    {
        return $this->idbadge;
    }

    public function setIdbadge(?Badge $idbadge): static
    {
        $this->idbadge = $idbadge;

        return $this;
    }
}
