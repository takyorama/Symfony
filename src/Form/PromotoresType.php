<?php namespace App\Form;

use App\Entity\Promotores;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotoresType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
        ->add('nome')
        ->add('cpf')
        ->add('empresa')
        ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(['data_class' => Promotores::class, ]);
    }
}
