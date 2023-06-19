<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Orders;
use App\Entity\Products;
use App\Entity\Transporters;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class OrdersTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'] ?? null;

        $builder
        ->add('address', EntityType::class, [
            'class' => Users::class,
            'label' => false,
            'required' => true,
            'multiple' => false,
            'choices' => [$user],
            'expanded' => true
        ])
        ->add('transporters',EntityType::class, [
         'class' => Transporters::class,
        'label' => false,
        'required' => true,
        'multiple' => false,
        'expanded' =>true        
        ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'user' => []
        ]);
    }
}



            

