<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


# FORMULAIRE NOUVELLE CATEGORIE ACCESIBLE UNIQUEMENT EN TANT QU'ADMIN
class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('nom',TextType::class, ['label' => 'Nom','required' => true,])
            ->add('photo', FileType::class, [
                'label' => 'Photo',])
            ->add('enregistrer', SubmitType::class, [
                'attr' => ['class' => 'Enregistrer'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}