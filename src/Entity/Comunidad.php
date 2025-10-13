<?php

namespace App\Entity;

use App\Repository\ComunidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComunidadRepository::class)]
class Comunidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $comunidad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $direccion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComunidad(): ?string
    {
        return $this->comunidad;
    }

    public function setComunidad(string $comunidad): static
    {
        $this->comunidad = $comunidad;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }
}
