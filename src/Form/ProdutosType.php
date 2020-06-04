<?php namespace App\Form;

use App\Entity\Produtos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProdutosType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('descricao')
            ->add('id_fornecedor')
            ->add('fornecedor')
            ->add('dta_fabricacao')
            ->add('dta_validade')
            ->add('preco')
            ->add('quantidade')
        ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(['data_class' => Produtos::class, ]);
    }
}
