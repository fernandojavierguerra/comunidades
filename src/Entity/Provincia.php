<?php

namespace App\Entity;

use App\Repository\ProvinciaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProvinciaRepository::class)]
class Provincia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $provincia = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comunidad $comunidad = null;

    /**
     * @var Collection<int, Localidad>
     */
    #[ORM\OneToMany(targetEntity: Localidad::class, mappedBy: 'provincia')]
    private Collection $localidades;

    public function __construct()
    {
        $this->localidades = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->provincia;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): static
    {
        $this->provincia = $provincia;

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

    /**
     * @return Collection<int, Localidad>
     */
    public function getLocalidades(): Collection
    {
        return $this->localidades;
    }

    public function addLocalidad(Localidad $localidad): static
    {
        if (!$this->localidades->contains($localidad)) {
            $this->localidades->add($localidad);
            $localidad->setProvincia($this);
        }

        return $this;
    }

    public function removeLocalidad(Localidad $localidad): static
    {
        if ($this->localidades->removeElement($localidad)) {
            // set the owning side to null (unless already changed)
            if ($localidad->getProvincia() === $this) {
                $localidad->setProvincia(null);
            }
        }

        return $this;
    }
}
