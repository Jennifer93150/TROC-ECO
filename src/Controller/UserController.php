<?php
// src/Controller/FormController.php
namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
# use App\Service\MessageGenerator;
# , MessageGenerator $messageGenerator


#use App\Service\MessageGenerator;


class UserController extends AbstractController
{
     # AFFICHAGE PROFIL (des données user)

    /**
    * @Route("/profil", name="profil")
    * @IsGranted("IS_AUTHENTICATED_FULLY")
    */
    public function profil()
    {
        return $this->render('/user/profil.html.twig');
    }

    
     # Fonction inscription (Ajout nouvel user)

    /**
     * @Route("/inscription", name="inscription", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder)
    {

        $user = new User();
        # chaque nouvel user aura le role user
        # grace a la methode role de la classe user
        $user->setRoles(['ROLE_USER']);

        # création d'un nouvel objet form
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);//Verification des contraintes imposées (ex: min caractères pr le champs description, NotBlank {ne pas retourner vide}..)

        # je cree une variable message vide qui contiendra mon msg flash
        # $message = '';


        #Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) { 
           
            # Encodage du mot de passe
            $user->setPassword(
                $encoder->encodePassword(
                    $user, $user->getPassword()
                )
            );

            # Insertion dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            #$message = $messageGenerator->getHappyMessage();
            $this->addFlash('success', 'Génial, vous venez de créer un compte, connectez-vous dès maintenant pour commencer à troquer !');
            
            
            return $this->redirectToRoute('accueil');
        }

        # Passer le formulaire à la vue
        return $this->render('/user/inscription.html.twig', ['user' => $user, 'Formulaire' => $form->createView(),
         ]);
         # 'message'=>$message a mettre ds array de return au dessus
    }

   
    # Modification du profil

    /**
     * @Route("/profil/edit/{id<\d+>}", name="edit_profil")
    * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $encoder)
    {
        # création d'un nouvel objet form
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        #Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) { 
           
            # Encodage du mot de passe
            $user->setPassword(
                $encoder->encodePassword(
                    $user, $user->getPassword()
                )
            );

            # Insertion dans la BDD
            $em = $this->getDoctrine()->getManager();
            # Le persist devient inutile car l'objet est deja existant ds la bdd et possede donc un id
            #$em->persist($user);
            $em->flush();
            
            # Notification succes
            $this->addFlash('success', 'Félicitations, votre profil a bien été modifié !');
            # Redirection au profil
            return $this->redirectToRoute('profil');
            
        }

        # Passer le formulaire à la vue
        return $this->render('/user/edit.html.twig', ['Formulaire' => $form->createView()]);
    
    }


    # Suppression user

    # Fonction a terminer rechercher delete en cascade
    
    /**
     * @Route("/profil/delete/{id<\d+>}", name="delete_user")
     * @return Response
     */
    /*public function delete(User $user)
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        # redirige la page
        # return $this->redirectToRoute('accueil');
        return new Response('Votre compte a bien été supprimé.');
    }*/

    
}
