<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('email')
            // ->add('password')
            // ->add('is_admin')
            ->add('gender')
            ->add('firstName')
            ->add('lastName')
            ->add('age')
            ->add('phone')
            ->add('address')
            ->add('country')
            ->add('fidelityCard')
            // ->add('pictureFile')
            // ->add('appointments')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
