<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string"
     * , length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEnregistrement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

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

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->dateEnregistrement;
    }

    public function setDateEnregistrement(\DateTimeInterface $dateEnregistrement): self
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }
}

//created initialy when the enteti created **********************************************************************  
// namespace App\Entity;

// use App\Repository\ProduitRepository;
// use Doctrine\DBAL\Types\Types;
// use Doctrine\ORM\Mapping as ORM;

// #[ORM\Entity(repositoryClass: ProduitRepository::class)]
// class Produit
// {
//     #[ORM\Id]
//     #[ORM\GeneratedValue]
//     #[ORM\Column]
//     private ?int $id = null;

//     #[ORM\Column(type: Types::TEXT)]
//     private ?string $titre = null;

//     #[ORM\Column(length: 255)]
//     private ?string $description = null;

//     #[ORM\Column(length: 10)]
//     private ?string $couleur = null;

//     #[ORM\Column(length: 255)]
//     private ?string $taille = null;

//     #[ORM\Column]
//     private ?float $photo = null;

//     #[ORM\Column]
//     private ?int $prix = null;

//     #[ORM\Column(nullable: true)]
//     private ?int $stock = null;

//     #[ORM\Column(type: Types::DATETIME_MUTABLE)]
//     private ?\DateTimeInterface $dateEnregistrement = null;

//     public function getId(): ?int
//     {
//         return $this->id;
//     }

//     public function getTitre(): ?string
//     {
//         return $this->titre;
//     }

//     public function setTitre(string $titre): self
//     {
//         $this->titre = $titre;

//         return $this;
//     }

//     public function getDescription(): ?string
//     {
//         return $this->description;
//     }

//     public function setDescription(string $description): self
//     {
    //     $this->description = $description;

    //     return $this;
    // }

    // public function getCouleur(): ?string
    // {
    //     return $this->couleur;
    // }

    // public function setCouleur(string $couleur): self
    // {
    //     $this->couleur = $couleur;

    //     return $this;
    // }

    // public function getTaille(): ?string
    // {
    //     return $this->taille;
    // }

    // public function setTaille(string $taille): self
    // {
    //     $this->taille = $taille;

    //     return $this;
    // }

    // public function getPhoto(): ?float
    // {
    //     return $this->photo;
    // }

    // public function setPhoto(float $photo): self
    // {
    //     $this->photo = $photo;

    //     return $this;
    // }

    // public function getPrix(): ?int
    // {
    //     return $this->prix;
    // }

    // public function setPrix(int $prix): self
    // {
    //     $this->prix = $prix;

    //     return $this;
    // }

    // public function getStock(): ?int
    // {
    //     return $this->stock;
    // }

    // public function setStock(?int $stock): self
    // {
    //     $this->stock = $stock;

    //     return $this;
    // }

    // public function getDateEnregistrement(): ?\DateTimeInterface
    // { 
//         return $this->dateEnregistrement;
//     }

//     public function setDateEnregistrement(\DateTimeInterface $dateEnregistrement): self
//     {
//         $this->dateEnregistrement = $dateEnregistrement;

//         return $this;
//     }
// } 
