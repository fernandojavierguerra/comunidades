<?php

namespace App\Entity;

use App\Repository\ComunidadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var Collection<int, Persona>
     */
    #[ORM\OneToMany(targetEntity: Persona::class, mappedBy: 'comunidad', orphanRemoval: true)]
    private Collection $personas;

    public function __construct()
    {
        $this->personas = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getComunidad();
    }

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

    /**
     * @return Collection<int, Persona>
     */
    public function getPersonas(): Collection
    {
        return $this->personas;
    }

    public function addPersona(Persona $persona): static
    {
        if (!$this->personas->contains($persona)) {
            $this->personas->add($persona);
            $persona->setComunidad($this);
        }

        return $this;
    }

    public function removePersona(Persona $persona): static
    {
        if ($this->personas->removeElement($persona)) {
            // set the owning side to null (unless already changed)
            if ($persona->getComunidad() === $this) {
                $persona->setComunidad(null);
            }
        }

        return $this;
    }
}
