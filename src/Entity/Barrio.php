<?php

namespace App\Entity;

use App\Repository\BarrioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BarrioRepository::class)]
class Barrio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $barrio = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comunidad $comunidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBarrio(): ?string
    {
        return $this->barrio;
    }

    public function setBarrio(string $barrio): static
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getComunidad(): ?Comunidad
    {
        return $this->comunidad;
    }

    public function setComunidad(?Comunidad $comunidad): static
    {
        $this->comunidad = $comunidad;

        return $this;
    }
}
