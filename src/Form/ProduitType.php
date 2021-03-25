<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

# formulaire nouveau produit/annonce
class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            # SELECT CATEGORIES
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class, 
                'choice_label' => 'Nom',
                'required' => true,]) 
            ->add('photo', FileType::class, [
                'label' => 'Photo',])
            ->add('titre',TextType::class, ['label' => 'Titre','required' => true,])
            ->add('description', TextType::class, ['label' => 'Description','required' => true,])
            ->add('enregistrer', SubmitType::class, [
                'attr' => ['class' => 'Enregistrer'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}