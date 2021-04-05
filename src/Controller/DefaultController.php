<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
     
    
    # JE CREER MES ROUTES VERS MES PAGES HTML
    
  
    /**
    * @Route("/", name="accueil")
    */
    public function accueil()
    {
    
        return $this->render('/troc-eco/index.html.twig');
    }

   
    # Affichage les categories dans page Recherche

    /**
    * @Route("/recherche", name="recherche")
    */
    public function affiche(CategorieRepository $categorieRepository)
    {
        
        return $this->render('/troc-eco/categories/recherche_categorie.html.twig', ['noscategories'=>$categorieRepository->findAll()]);
        
    }


    /**
    * @Route("/message", name="message")
    * @IsGranted("IS_AUTHENTICATED_FULLY")
    */
    public function message()
    {
    
        return $this->render('/user/messages.html.twig');
    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contact()
    {
    
        return $this->render('/troc-eco/contact.html.twig');
    }

    /**
    * @Route("/politique", name="politique")
    */
    public function politique()
    {
    
        return $this->render('/troc-eco/politique.html.twig');
    }
    
}
