<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
#use Symfony\Component\HttpFoundation\File\File;
#use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 * @ORM\Table(name="produit")
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    

//JE LIE mon produit A user
    /**
     * Un produit a une catégorie
     * mappedBy=l'entité appelle le user 
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="produits")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Un produit a une catégorie
     * mappedBy=l'entité appelle les categories 
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="produits")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    # En cours d'essai, création d'une relation avec cet attribut et la table picture afin de stocker les photos ds la table picture
    /**
     * Un produit a une ou plusieurs prictures
     * @ORM\OneToMany(targetEntity="App\Entity\Picture", mappedBy="produit")
     */
    private $pictures;

    # J'ai du RENDRE cet attribut NULL pour permettre l'envoi du reste des infos a la bdd, car malgré le code de la fonction correct (code identique à la fonction categorie ) ET l'attribut non null au depart, le fichier est considéré comme null à l'envoi.
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    
    public function __construct()
    {
        $this->date = new \DateTime('NOW');
        $this->pictures = new ArrayCollection();
    }

   
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

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }
   
    /**
     * Get un produit a potentiellement plusieurs catégories
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set un produit a potentiellement plusieurs catégories
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return  \DateTime
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param  \DateTime  $date
     *
     * @return  self
     */ 
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    # En cours d'essai, création d'une relation avec cet attribut et la table picture
    /**
     * @return Collection|Images[]
     */
    public function getPictures(): Collection
    {
        return $this->pictures;
    }

    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    
}
