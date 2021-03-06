<?php

namespace App\Entity;

use App\Repository\EnchereFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnchereFournisseurRepository::class)]
class EnchereFournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $id_enchere;

    #[ORM\Column(type: 'float')]
    private $prix;

    #[ORM\Column(type: 'string', length: 60)]
    private $fournisseur;

    #[ORM\Column(type: 'string', length: 100)]
    private $produit;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'integer')]
    private $id_panierglobaldetail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEnchere(): ?int
    {
        return $this->id_enchere;
    }

    public function setIdEnchere(int $id_enchere): self
    {
        $this->id_enchere = $id_enchere;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getFournisseur(): ?string
    {
        return $this->fournisseur;
    }

    public function setFournisseur(string $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getIdPanierglobaldetail(): ?int
    {
        return $this->id_panierglobaldetail;
    }

    public function setIdPanierglobaldetail(int $id_panierglobaldetail): self
    {
        $this->id_panierglobaldetail = $id_panierglobaldetail;

        return $this;
    }
}
