<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class GestionController extends AbstractController
{
    # Fonction ajout nouvelle categorie
    # (Pour chaque ajout de catégorie créer absolumt la route + function d'affichage sur ProduitController.php + ajouter une page html.twig afin d'afficher ses produits sinon qd je cliquerai sur cette categorie pour acceder a ses produits cela affichera une erreur de chemin)
    
    /**
     * @Route("/admin/gestion", name="gestion", methods={"GET","POST"})
     */
    public function new(Request $request)
    {

        # Création d'un nouvel object vide
        $categorie = new Categorie();


        # Création d'un nouvel objet form
        $form = $this->createForm(CategorieType::class, $categorie);
 		$form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {

             /** @var UploadedFile $brochureFile */
           $brochureFile = $form->get('photo')->getData();

           # cette condition est nécessaire car le champ 'brochure' n'est pas obligatoire
           # donc le fichier ne doit être traité que lorsqu'un fichier est téléchargé
           if ($brochureFile) {
               $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
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
               $categorie->setPhoto($newFilename);
               $categorie->setPhoto(new File($this->getParameter('brochures_directory').'/'.$categorie->getPhoto()));
                # je remet ca ici pour que ca envoi juste le nom de photo sans le chemin
                $categorie->setPhoto($newFilename);
           }


            # Insertion dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            return $this->redirectToRoute('recherche');

        }

        # Passer le formulaire à la vue
        return $this->render('/admin/gestion.html.twig', ['Formulaire' => $form->createView()]);
    }
}

    # Suppression catégorie
    #@return Response
    /**
     * @Route("admin/delete/categorie/{id<\d+>}", name="delete_categorie")
     * 
     */
    /*public function delete(Categorie $categorie)
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();

        # redirige la page
        return $this->redirectToRoute('accueil');
        #return new Response('La catégorie a bien été supprimé.');
    }*/
