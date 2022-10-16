<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomLivre',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('auteurLivre',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('reference',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('ouvrage',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('anneePublication',DateType::class,[ "attr" => ["class" => "form-control"] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
