<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Table(name="user")
 * @UniqueEntity(fields="email")
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     * NotBlank s'assure que la valeur n'est pas vide
     * @Assert\NotBlank(message="Vous devez renseigner un nom.")
     */
    private $nom;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * NotNull s'assure que la valeur n'est pas null
     * @Assert\NotNull(message="Vous devez renseigner un mot de passe")
     */
    private $password;


    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(message="Vous devez renseigner un e-mail.")
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telephone;

    

    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank(message="Vous devez accepter la politique de confidentialité.")
     */
    private $acceptation;

    
    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

//JE LIE user A produit
    /**
     * Un user a potentiellement plusieurs produits
     * @ORM\OneToMany(targetEntity="App\Entity\Produit", mappedBy="user")
     */
    private $produits;

//JE LIE user A produit
    /**
     * Un user a potentiellement plusieurs produits
     * @ORM\OneToMany(targetEntity="App\Entity\Message", mappedBy="user")
     */
    private $messages;


    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->messages = new ArrayCollection();
        
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        # garantir que chaque utilisateur a au moins ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getCp(): ?int
    {
        return $this->cp;
    }

    public function setCp(int $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAcceptation(): ?bool
    {
        return $this->acceptation;
    }

    public function setAcceptation(bool $acceptation): self
    {
        $this->acceptation = $acceptation;

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

    public function getProduits()
    {
        return $this->produits;
    }

    public function setProduits($produits): self
    {
        $this->produits = $produits;

        return $this;
    }

   

    /**
     * Get un user a potentiellement plusieurs produits
     */ 
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set un user a potentiellement plusieurs produits
     *
     * @return  self
     */ 
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    
}
