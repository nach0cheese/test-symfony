<?php

namespace App\Form;

use App\Entity\Velo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marque', TextType::class, [
                "attr" =>[
                    "class" => "form-control",
                ]
            ])
            ->add('stylevelo', ChoiceType::class, [
                "attr" => [
                    "class" => "form-control"
                ],
                "choices" => [
                    "VTT" => "VTT",
                    "VTC" => "VTC",
                    "Vintage" => "Vintage",
                    "Vélo de ville" => "Ville",
                    "Velocross" => "Cross"
                ]
            ])
            ->add('annee', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('etat', ChoiceType::class, [
                "attr" => [
                    "class" => "form-control"
                ],
                "choices" => [
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "Etat correct" => "Etat correct",
                    "Mauvais état" => "Mauvais état",
                    "A réparer" => "A réparer"
                ]
            ])
            ->add('prix', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('nbvitesse', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]

            ])
            ->add('typefrein', ChoiceType::class, [
                "attr" => [
                    "class" => "form-control"
                ],
                "choices" => [
                    "Frein à disque" => "Frein à disque",
                    "Frein à plaquette" => "Frein à plaquette"
                ]
            ])
            ->add('modele', ChoiceType::class, [
                "attr" => [
                    "class" => "form-control"
                ],
                "choices" => [
                    "Homme" => "Homme",
                    "Femme" => "Femme",
                    "Mixte" => "Mixte",
                    "Enfant" => "Enfant"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Velo::class,
        ]);
    }
}
