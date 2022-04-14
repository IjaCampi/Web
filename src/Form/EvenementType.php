<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEvent',TextType::class, array('label' => 'Event name'),[

                ]



            )
            ->add('description',TextareaType::class,['attr' =>
                [
                    'rows' =>10,'cols ' =>50

                ]
            ])
            ->add('dateDebut',TextType::class,[
        //'widget' => 'single_text'
    ])
            ->add('dateFin',TextType::class,[
                //'widget' => 'single_text'
            ])
            ->add('nbrReservation',TextType::class,[
                'attr'=>[
                    'placeholder'=>"nombre de réservation"
                    ]
                ])
            ->add('prix',TextType::class,[
                'attr'=>[
                    'placeholder'=>"prix d'évènement"
                ]
            ])
            ->add('activite',TextType::class,[
                'attr'=>[
                    'placeholder'=>"les activités"
                ]
            ])
            ->add('idHebergement')
            ->add('idUser')
            ->add('idEquipement')
            ->add('idTransport')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
