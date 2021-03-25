<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # création user

        $user = new User();
        $user->setNom('Sandrine')->setPassword('azerty')->setEmail('Sandrine.nouar@yahoo.com')->setCp('93000')->setVille('Bobigny')->setTelephone('0652199947')->setAcceptation('1')->setRoles(["ROLE_ADMIN"]);

        $user1 = new User();
        $user1->setNom('Celine')->setPassword('azerty')->setEmail('celineclaret@yahoo.fr')->setCp('93000')->setVille('Bobigny')->setTelephone('0652199947')->setAcceptation('1')->setRoles(["ROLE_ADMIN"]);

        $user2 = new User();
        $user2->setNom('Jennifer')->setPassword('azerty')->setEmail('imaine.c@hotmail.fr')->setCp('93000')->setVille('Bobigny')->setTelephone('0652199947')->setAcceptation('1')->setRoles(["ROLE_ADMIN"]);

        $user3 = new User();
        $user3->setNom('Intidhar')->setPassword('azerty')->setEmail('intidhar@yahoo.fr')->setCp('93000')->setVille('Bobigny')->setTelephone('0652199947')->setAcceptation('1')->setRoles(["ROLE_ADMIN"]);

        

        $manager->persist($user);
        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);
        

        $manager->flush();


        # création catégorie 

        $categorie = new Categorie();
        $categorie->setNom('Livres')->setPhoto('livre-605a32325074d.jpeg');
        $categorie1 = new Categorie();
        $categorie1->setNom('Vetements')->setPhoto('vetement-6058b12e8f120.jpeg');
        $categorie2 = new Categorie();
        $categorie2->setNom('Jardin')->setPhoto('jardin-605a5a117af85.jpeg');
        $categorie3 = new Categorie();
        $categorie3->setNom('Maison')->setPhoto('maison-6348b12e8f120.png');
        $categorie4 = new Categorie();
        $categorie4->setNom('Puericulture')->setPhoto('puericulture-6058b02eb1dd0.jpeg');
        $categorie5 = new Categorie();
        $categorie5->setNom('Multimedia')->setPhoto('multimedia-605a65076ad37.jpeg');
        

        $manager->persist($categorie);
        $manager->persist($categorie1);
        $manager->persist($categorie2);
        $manager->persist($categorie3);
        $manager->persist($categorie4);
        $manager->persist($categorie5);
        
        $manager->flush();


        # création produit 

        /*$produit = new Produit();
        $produit->setTitre('T-shirt')->setUser('Jennifer')->setCategorie('Vetements')->setDescription('T-shirt en coton. J\'aimerais l\'échanger contre une jupe.')->setPhoto('t-shirt-6058b12e8f234.png');
        $produit = new Produit();
        $produit->setTitre('Baskets')->setUser(32)->setCategorie('Vetements')->setDescription('Baskets Nike en excellent état. A troquer contre une paire d\'escarpins.')->setPhoto('shoes-605b85b4538bd.jpeg');
        $produit = new Produit();
        $produit->setTitre('Sèche-cheveux')->setUser(32)->setCategorie('Maison')->setDescription('Sèche-cheveux en très bon état. De marque Braun.')->setPhoto('seche-cheveux-605b85de55ef2.jpeg');

        $manager->persist($produit);
        $manager->flush();*/



    }
}
