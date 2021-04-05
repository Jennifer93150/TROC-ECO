<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PictureRepository::class)
 */
class Picture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * Une ou plusieurs picture appartient à un produit 
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="pictures")
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    private $produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;


    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getProduit(): ?int
    {
        return $this->produit;
    }

    public function setProduit(int $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
