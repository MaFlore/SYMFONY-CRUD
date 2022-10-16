<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomLivre;

    #[ORM\Column(type: 'string', length: 255)]
    private $auteurLivre;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'string', length: 255)]
    private $ouvrage;

    #[ORM\Column(type: 'date')]
    private $anneePublication;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLivre(): ?string
    {
        return $this->nomLivre;
    }

    public function setNomLivre(string $nomLivre): self
    {
        $this->nomLivre = $nomLivre;

        return $this;
    }

    public function getAuteurLivre(): ?string
    {
        return $this->auteurLivre;
    }

    public function setAuteurLivre(string $auteurLivre): self
    {
        $this->auteurLivre = $auteurLivre;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getOuvrage(): ?string
    {
        return $this->ouvrage;
    }

    public function setOuvrage(string $ouvrage): self
    {
        $this->ouvrage = $ouvrage;

        return $this;
    }

    public function getAnneePublication(): ?\DateTimeInterface
    {
        return $this->anneePublication;
    }

    public function setAnneePublication(\DateTimeInterface $anneePublication): self
    {
        $this->anneePublication = $anneePublication;

        return $this;
    }
}
