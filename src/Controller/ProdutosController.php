<?php namespace App\Controller;

use App\Entity\Produtos;
use App\Form\ProdutosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
/**
 * @Route("produtos", name="produtos_")
 */
class ProdutosController extends AbstractController{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response {
        $repositorio = $this->getDoctrine()->getRepository(Produtos::class);
        $produtos = $repositorio->findAll();

        return $this->render('produtos/produtos.html.twig', ['controller_name'=>'ProdutosController', 'produtos'=>$produtos]);
    }
    /**
     * @Route("/novo", name="novo")
     */
    public function create(): Response {
        $produto = new Produtos();
        $form = $this->createForm(ProdutosType::class, $produto);
        $form->add('enviar', SubmitType::class);

        return $this->render('produtos/novo.html.twig', ['form'=>$form->createView(),]);
    }
    /**
     * @Route("/lista", name="lista")
     */
    public function store(Request $request){
        $produto = $request->request->All();

        $manager = $this->getDoctrine()->getManager();

        //$manager->persist($produto);
        //$manager->flush();

        $produtos = new Produtos();
        $repositorio = $this->getDoctrine()->getRepository(Produtos::class);
        $produtos = $repositorio->findAll();

        return $this->render('produtos/produtos.html.twig', ['produtos'=>$produtos]);
    }
    /**
     * @Route("/edit/{id}", name="edita")
     */
    public function edit($id){ return $this->render('produtos/edita.html.twig' ,); }
    /**
     * @Route("/{id}/update", name="atualiza")
     */
    public function update(Request $request, $id){
        return $this->redirect('produtos/produtos.html.twig');
    }
    /**
     * @Route("/delete/{id}", name="deleta_produto")
     */
    public function delete($id){
        return $this->redirect('produtos/produtos.html.twig');
    }
}
