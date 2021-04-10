<?php
// src/Controller/ProduitController.php
namespace App\Controller;


use App\Entity\Message;
use App\Form\MessageType;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class MessageController extends AbstractController
{
    
    /**
    * @Route("/message", name="message")
    * @IsGranted("IS_AUTHENTICATED_FULLY")
    */
    /*public function message()
    {
    
        return $this->render('/user/message/show.html.twig');
    }*/


    # ENVOI DE MESSAGE

    /**
     * @Route("/message", name="message", methods={"GET","POST"})
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function send(Request $request, UserInterface $user): Response
    {
        # Création d'un nouvel object vide
        $message = new Message();

        # (via la methode getUser() de la classe Produit), je recupere le user du produit qui sera ajouté
        $user = $this->getUser();
        
        # Création d'un nouvel objet form
        $form = $this->createForm(MessageType::class, $message);
 		$form->handleRequest($request);

        #$message= $this->getUser();
        
        # Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) {
          
            # $form->getData() contient les valeurs soumises
            $message = $form->getData();
            $date= new \DateTime('NOW');
            $message->setDate($date);
            
            # Grace à ça l'id de user qui aura ajouté le produit sera indiqué ds la bdd  
            $message->setUser($user);

            # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            # Notification de confirmation
            $this->addFlash('success', 'Super, votre message a bien été envoyé !');
            return $this->redirectToRoute('profil');
        }

        # Passer le formulaire à la vue
        return $this->render('/user/message/message.html.twig', ['Formulaire' => $form->createView()]);
    }

    
    # AFFICHAGE MESSAGES RECUS
   
    /**
     * @Route("/messagerie/{id<\d+>}", name="messagerie" , methods={"GET"})
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function recu(Request $request, MessageRepository $messageRepository, $id)
    {
        # Je recupere mes messages par leur id de destinataire avec la variable $id que je rappelle dans le findBy destinataire=>$id
        # les messages qui s'afficheront seront ceux de l'user connecté grâce à la route qui recupere id de user connecté. 
        return $this->render('/user/message/messagerie.html.twig', ['mesmessages'=>$messageRepository->findBy(['destinataire'=> $id])]);
        
    }
    
}