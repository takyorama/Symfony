<?php namespace App\Controller;

use App\Entity\Produtos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProdutosController extends AbstractController{
    /**
     * @Route("/")
     */
    public function index(): Response {
        $produtos = new Produtos();
        $repositorio = $this->getDoctrine()->getRepository('App\Entity\Produtos');

        return $this->render('produtos/index.html.twig', ['produtos'=>$produtos]);
    }
    /**
     * @Route("/produtos/novo", name="novo_produto")
     */
    public function create(): Response {
        /*
        $entidadeManager = $this->getDoctrine()->getManager();
        $produto = new Produtos();
        
        $produto->setDescription('Tapa-olho');
        $produto->setPrice(2.50);
        $produto->setAmount();

        $entityManager->persist($produto);
        $entityManager->flush();

        return new Response('{$produto->getDescription()} salvo com sucesso!');
        */
        return $this->render('produtos/novoproduto.html.twig', );
    }
    /**
     * @Route("/produtos/store", name="lista_produtos")
     */
    public function store(){}
    /**
     * @Route("/produtos/edit/$id", name="edita_produto")
     */
    public function edit($id){ return $this->render('produtos/edita.html.twig' ,); }
    /**
     * @Route("/produtos/$id/update", name="atualiza_produto")
     */
    public function update($id){}
    /**
     * @Route("/produtos/delete/$id", name="deleta_produto")
     */
    public function delete($id){}
}
?>
