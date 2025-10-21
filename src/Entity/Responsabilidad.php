<?php

namespace App\Entity;

use App\Repository\ResponsabilidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResponsabilidadRepository::class)]
class Responsabilidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $responsabilidad = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comunidad $comunidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponsabilidad(): ?string
    {
        return $this->responsabilidad;
    }

    public function setResponsabilidad(string $responsabilidad): static
    {
        $this->responsabilidad = $responsabilidad;

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
