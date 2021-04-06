<?php

namespace App\Controller;


use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class Produit1Controller extends AbstractController
{
    # Fonction ajout nouveau produit
    
    /**
     * @Route("/ajouter", name="ajout", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request)
    {

        # Création d'un nouvel object vide
        $produit = new Produit();

        # (via la methode getUser() de la classe Produit, je recupere le user du produit qui sera ajouté
        $user = $this->getUser();

        # Création d'un nouvel objet form
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            
             /** @var UploadedFile $brochureFile */
           $brochureFile = $form->get('photo')->getData();

           # cette condition est nécessaire car le champ 'brochure' n'est pas obligatoire
           # donc le fichier ne doit être traité que lorsqu'un fichier est téléchargé

           # !! J'ai du rendre null l'attribut photo car un probleme au niveau de l'envoi de la photo (il est null à l'envoi)
           if ($brochureFile) {
               $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);

               dump($originalFilename);//alors afficher le contenu de l'objet $user sur la console
               
               # cela est nécessaire pour inclure en toute sécurité le nom du fichier dans l'URL
               #$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
               $newFilename = $originalFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

               // Move the file to the directory where brochures are stored
               try {
                   $brochureFile->move(
                       $this->getParameter('brochures_directory'),
                       $newFilename
                   );
               } catch (FileException $e) {
                   // ... handle exception if something happens during file upload
               }

               // updates the 'brochureFilename' property to store the PDF file name
               // instead of its contents
               $produit->setPhoto($newFilename);
               $produit->setPhoto(new File($this->getParameter('brochures_directory').'/'.$produit->getPhoto()));
                # je remet ca ici pour que ca envoi juste le nom de photo sans le chemin
                $produit->setPhoto($newFilename);
            }
           
            # Grace à ça l'id de user qui aura ajouté le produit sera indiqué ds la bdd  
            $produit->setUser($user);

            # Insertion dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            $this->addFlash('success', 'Félicitations, votre produit a bien été ajouté !');

            return $this->redirectToRoute('recherche');

        }

        # Passer le formulaire à la vue
        return $this->render('/troc-eco/ajout-troc.html.twig', ['Formulaire' => $form->createView()]);
    }


    # Affichage DE la liste de TS LES PRODUITS par CATEGORIE


    /**
     * @Route("/categorie/liste/{id<\d+>}", name="liste" , methods={"GET"})
     */
    public function liste(Request $request, ProduitRepository $produitRepository, $id)
    {
        # je recupere mes produit par leur id de categorie avec la variable $id que je rappelle dans le findBy categorie=>$id
        return $this->render('/troc-eco/categories/liste_produits.html.twig', ['lesproduits'=>$produitRepository->findBy(['categorie'=> $id])]);
        
    }


    # Suppression produit
    # En cours de création (pas eu le temps)
    /**
     * @Route("/produit/delete/{id<\d+>}", name="deleteproduit")
     */
    public function delete(Request $request, Produit $produit)
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        #return new Response('Votre annonce a bien été supprimé.');

        # redirige la page
        return $this->redirectToRoute('accueil');
    }


    # Affichage d'une annonce selectionnée
    
    /**
    * @Route("/categorie/annonce/{id<\d+>}", name="annonce", methods={"GET"})
    */
    public function annonces(Request $request, ProduitRepository $produitRepository, $id)
    {
        
        return $this->render('/troc-eco/categories/annonce.html.twig', ['produit'=>$produitRepository->find($id)]);
    }

}

