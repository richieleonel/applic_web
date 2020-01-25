<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Fichier;
use App\Entity\TimeStampTrait;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class FichierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('path',FileType::class,array(
                'label'=>'Importer un fichier',
                'attr' => [
                    'full_name' => 'image'
                ],
                'required' => true,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '15360k',
                        'mimeTypes' => [
                            'image/*',
                            'application/*'
                        ],
                        'mimeTypesMessage' => 'Veuillez ajouter un fichier valide',
                    ])
                ],
            ))
//            ->add('createdAt')
            ->add('cours',EntityType::class,array(
                'class'=>'App\Entity\Cours',
                'choice_label'=>'nom'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fichier::class,
        ]);
    }
}
