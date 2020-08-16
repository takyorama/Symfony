<?php namespace App\Form;

use App\Entity\Produtos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProdutosType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('descricao', TextType::class)
            ->add('id_fornecedor', TextType::class)
            ->add('fornecedor', TextType::class)
            ->add('dta_fabricacao', DateType::class)
            ->add('dta_validade', DateType::class)
            ->add('preco', TextType::class)
            ->add('quantidade', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(['data_class' => Produtos::class, ]);
    }
}
