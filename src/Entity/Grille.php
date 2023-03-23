<?php

namespace App\Entity;

use App\Repository\GrilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrilleRepository::class)]
class Grille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $n1 = null;

    #[ORM\Column]
    private ?int $n2 = null;

    #[ORM\Column]
    private ?int $n3 = null;

    #[ORM\Column]
    private ?int $n4 = null;

    #[ORM\Column]
    private ?int $n5 = null;

    #[ORM\Column]
    private ?int $nchance = null;

    #[ORM\ManyToOne(inversedBy: 'grilles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Joueur $joueur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getN1(): ?int
    {
        return $this->n1;
    }

    public function setN1(int $n1): self
    {
        $this->n1 = $n1;

        return $this;
    }

    public function getN2(): ?int
    {
        return $this->n2;
    }

    public function setN2(int $n2): self
    {
        $this->n2 = $n2;

        return $this;
    }

    public function getN3(): ?int
    {
        return $this->n3;
    }

    public function setN3(int $n3): self
    {
        $this->n3 = $n3;

        return $this;
    }

    public function getN4(): ?int
    {
        return $this->n4;
    }

    public function setN4(int $n4): self
    {
        $this->n4 = $n4;

        return $this;
    }

    public function getN5(): ?int
    {
        return $this->n5;
    }

    public function setN5(int $n5): self
    {
        $this->n5 = $n5;

        return $this;
    }

    public function getNchance(): ?int
    {
        return $this->nchance;
    }

    public function setNchance(int $nchance): self
    {
        $this->nchance = $nchance;

        return $this;
    }

    public function getJoueur(): ?Joueur
    {
        return $this->joueur;
    }

    public function setJoueur(?Joueur $joueur): self
    {
        $this->joueur = $joueur;

        return $this;
    }
}
