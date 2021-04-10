<?php
// src/Controller/CategorieController.php
namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class CategorieController extends AbstractController
{
     # Affichage les categories dans page Recherche

    /**
    * @Route("/recherche", name="recherche")
    */
    public function affiche(CategorieRepository $categorieRepository)
    {
        
        return $this->render('/troc-eco/categories/recherche_categorie.html.twig', ['noscategories'=>$categorieRepository->findAll()]);
        
    }

  

}

