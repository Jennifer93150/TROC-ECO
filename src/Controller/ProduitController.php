<?php
// src/Controller/ProduitController.php
namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
#use Symfony\Component\HttpFoundation\File\Exception\FileException;
#use Symfony\Component\HttpFoundation\File\File;


class ProduitController extends AbstractController
{
    # Fonction ajout nouveau produit
    

    /**
     * Nécessite juste d'être connecté
     * @Route("/ajouter", name="ajout", methods={"GET","POST"})
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * fonctionne aussi avec ROLE_USER
     */
    public function new(Request $request)
    {

        
        # Création d'un nouvel object vide
        $produit = new Produit();
        
        # (via la methode getUser() de la classe Produit, je recupere le user du produit qui sera ajouté
        $user = $this->getUser();

        # Création d'un nouvel objet form
        $form = $this->createForm(ProduitType::class, $produit);
        # Permet à Symfony de gérer les données saisies par l'utilisateur
 		$form->handleRequest($request);

        # Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) {

            # Fonction desactivée pour le moment 

           /** @var UploadedFile $brochureFile */
           /*$brochureFile = $form->get('photo')->getData();

           # cette condition est nécessaire car le champ 'brochure' n'est pas obligatoire
           # donc le fichier PDF ne doit être traité que lorsqu'un fichier est téléchargé
           if ($brochureFile) {
               $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
               # cela est nécessaire pour inclure en toute sécurité le nom du fichier dans l'URL
               #$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
               $newFilename = $originalFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

               # Déplacez le fichier vers le répertoire où sont stockées les brochures
               try {
                   $brochureFile->move(
                       $this->getParameter('brochures_directory'),
                       $newFilename
                   );
               } catch (FileException $e) {
                   // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
               }

               # met à jour la propriété 'brochureFilename' pour stocker le nom du fichier PDF
               # au lieu de son contenu
               $produit->setPhoto($newFilename);
               $produit->setPhoto(new File($this->getParameter('brochures_directory').'/'.$produit->getPhoto())
            );
                $produit->setPhoto($newFilename);
           }*/

            # Grace à ça l'id de user qui aura ajouté le produit sera indiqué ds la bdd  
            $produit->setUser($user);
           
            # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }


        # Passer le formulaire à la vue
        return $this->render('/troc-eco/ajout-troc.html.twig', ['Formulaire' => $form->createView()]);
    }


    # Suppression produit
    # En cours de création (pas eu le temps)
    /**
     * @Route("/produit/delete/{id<\d+>}", name="deleteproduit")
     */
    /*public function delete(Request $$request, Produit $produit)
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        #return new Response('Votre annonce a bien été supprimé.');

        # redirige la page
        return $this->redirectToRoute('accueil');
    }*/

    
    # Affichage DE TS LES PRODUITS CATEGORIE VETEMENT

    /**
     * @Route("/categorie/vetement", name="Vetements", methods={"GET"})
     */
    public function vetement(ProduitRepository $produitRepository)
    {
        return $this->render('/troc-eco/categories/vetement.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 18])]);
        #return new Response(count($produitRepository). "produits dans cette catégorie.");
    }
    

    # Affichage categorie JARDIN

    /**
     * @Route("/categorie/jardin", name="Jardin", methods={"GET"} )
     */
    public function jardin(ProduitRepository $produitRepository)
    {
        return $this->render('/troc-eco/categories/jardin.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 19])]);
    }


     # Affichage categorie MAISON

    /**
     * @Route("/categorie/maison", name="Maison", methods={"GET"} )
     */
    public function maison(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/maison.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 20])]);
    }


     # Affichage categorie PUERICULTURE

    /**
     * @Route("/categorie/puericulture", name="Puericulture" , methods={"GET"})
     */
    public function puericulture(ProduitRepository $produitRepository)
    {
       
        return $this->render('/troc-eco/categories/puericulture.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 21])]);
    }


    # Affichage categorie MULTIMEDIA

    /**
     * @Route("/categorie/multimedia", name="Multimedia", methods={"GET"} )
     */
    public function multimedia(ProduitRepository $produitRepository)
    {
        
        return $this->render('/troc-eco/categories/multimedia.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 22])]);
    }


    # Affichage categorie LIVRE

    /**
     * @Route("/categorie/livre", name="Livres", methods={"GET"} )
     */
    public function livre(ProduitRepository $produitRepository)
    {
       
        return $this->render('/troc-eco/categories/livre.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 16])]);
    }


    # Affichage d'une annonce selectionnée
    # En cours....
    /**
    * @Route("/categorie/annonce", name="annonce", methods={"GET"})
    */
    /*public function annonces($id, ProduitRepository $produitRepository)
    {
        
        return $this->render('/troc-eco/categorie/annonce.html.twig', ['produits'=>$produitRepository->find($id)]);
    }*/

}