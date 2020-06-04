<?php namespace App\Form;

use App\Entity\Contatos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContatosType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('nome')
            ->add('email')
            ->add('telefone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(['data_class' => Contatos::class, ]);
    }
}
